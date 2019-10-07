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
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/hello-world", name="helloWord")
     */
    public function helloWorldAction(){
         echo "<h1>Hola mundo!!</Hh1>";
        die();
    }


    // prueba 

    /**
	 * @Route("/blog", name="blog")
	 */
     
    // public function indexAction()
    // {
    //    $em = $this->getDoctrine()->getEntityManager();
    //     $entry_repo = $em->getRepository("BlogBundle:Entry");
    //     $entries = $entry_repo->findAll();

    //     foreach ($entries as $entry){
    //         echo $entry->getTitle()."<br/>";
    //     }

    //     die();

    //     return $this->render('BlogBundle:Default:index.html.twig');
    // }
}
