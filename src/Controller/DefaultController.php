<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Configuration;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    // public function index()
    // {
    //     $number = mt_rand(0, 100);

    //     return $this->render('default/index.html.twig', array(
    //         'number' => $number,
    //     ));
    // }
    
    public function mining($wallet, $username)
    {
        $number = mt_rand(0, 100);

        return $this->render('default/mining.html.twig', array(
            'wallet' => $wallet,
            'username' => $username,
        ));
    }

     public function index(Request $request)
    {
        $task = new Configuration();
        // $task->setUsername('Your Username');
        // $task->setWallet('Your Wallet');

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
}
?>