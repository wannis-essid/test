<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/chat", name="chat")
     */
    public function chatAction(Request $request)
    {


        $user=$this->getUser();
        //dump($user);
        $em=$this->getDoctrine()->getManager();
        $rep=$em->getRepository('AppBundle:User');
        $all_users=$rep->findAll();
        
        



        return $this->render('default/chat.html.twig', [


            'users'=>$all_users,
            'id_current_user'=>$user->getId()
        ]);
    }
}
