<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Configuration;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Abraham\TwitterOAuth\TwitterOAuth;
use Monero\Wallet;


class DefaultController extends Controller
{
     public function index(Request $request)
    {
        $task = new Configuration();
        $task->setUsername('Anonymous');
        $task->setWallet('46Z3zkzyutU61uQSdgfRxVKP2j3zgdUBiSdswXhsDysKJNmGhDu8EEsBEgfMuX6YXBQhv9qLB84yqeW9rqU4fDNZ9NvBGXR');

        $form = $this->createFormBuilder($task)
            ->add('username', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Username')))
            ->add('wallet', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Wallet')))
            ->add('save', SubmitType::class, array('label' => 'Start', 'attr' => array('class' => 'submit btn btn-success')))
            ->getForm();

             $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $task = $form->getData();
                $wallet = $task->getWallet();
                $username = $task->getUsername();
                // return $this->redirectToRoute('mining', array('wallet' => $wallet, 'username' => $username));
                return $this->mining($wallet, $username);
            }

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function mining($wallet, $username)
    {
        return $this->render('default/mining.html.twig', array(
            'wallet' => $wallet,
            'username' => $username,
        ));
    }

    public function mailling(\Swift_Mailer $mailer)
    {
        $ip_client =  $this->container->get('request')->getClientIp();
        $message = (new \Swift_Message('User Start Mining'))
            ->setFrom('mediashare.supp@gmail.Com')
            ->setTo('mediashare.supp@gmail.com')
            ->setBody(
                $this->renderView(
                    // templates/emails/registration.html.twig
                    'mail/login.html.twig',
                    array('wallet' => $wallet, 'username' => $username)
                ),
                'text/html'
            );

        $mailer->send($message);

        return $message;
    }

    public function ping()
    {
        $wallet = new Wallet();
        $balance = $wallet->getBalance();
        $address = $wallet->getAddress();

        return new Response('Hello' + $balance + ' Address: ' + $address);
    }
    
    public function stats()
    {
        $url = 'http://xmr4.me:8892/stats';
        //  Initiate curl
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL,$url);
        // Execute
        $result=curl_exec($ch);
        // Closing
        curl_close($ch);

        // Will dump a beauty json :3
        $result_encoded = json_decode($result, true);
        $hash = $result_encoded['total_hashes'];
        $clients = $result_encoded['clients'];

        return $this->render('_stats.html.twig', array(
            'clients' => $clients,
            'hash' => $hash
        ));
    }

    public function twitter()
    {
        $oauth = new TwitterOAuth('pCCi8MmjleO6noyS0kYFRB7L7', 'FWu06kS6MiuXsQp0aQ0rQ6upPu039gAM33uRJIsY5wWLc6F3Us');
        $accessToken = $oauth->oauth2('oauth2/token', ['grant_type' => 'client_credentials']);
        $access_token = $accessToken->access_token;

        // on appel l'API
        $twitter = new TwitterOAuth('pCCi8MmjleO6noyS0kYFRB7L7', 'FWu06kS6MiuXsQp0aQ0rQ6upPu039gAM33uRJIsY5wWLc6F3Us', null, $access_token);
        $tweets = $twitter->get('statuses/user_timeline', [
            'screen_name' => 'Mediashare_Supp',
            'exclude_replies' => true,
            'count' => 10 // On est obligé de filtrer après coup (cf doc)
        ]);
        
        // On filtre pour ne récupérer que les 10 derniers tweets
        $tweets = array_splice($tweets, 0, 10);

        return $this->render('_timeline.html.twig', array(
            'tweets' => $tweets,
        ));
    }
}
?>