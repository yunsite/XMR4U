<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Configuration;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Abraham\TwitterOAuth\TwitterOAuth;

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
                return $this->redirectToRoute('mining', array('wallet' => $wallet, 'username' => $username));
            }

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
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

        // On filtre pour ne récupérer que les 3 derniers tweets
        $tweets = array_splice($tweets, 0, 10);

        return $this->render('_timeline.html.twig', array(
            'tweets' => $tweets,
        ));
    }

    public function mining($wallet, $username)
    {
        return $this->render('default/mining.html.twig', array(
            'wallet' => $wallet,
            'username' => $username,
        ));
    }
}
?>