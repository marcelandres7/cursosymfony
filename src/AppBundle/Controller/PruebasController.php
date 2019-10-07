<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{
    /**
     * @Route("/pruebas/{name}/{page}", name="pruebasIndex",requirements={"name": "[a-zA-Z]*"}, methods={"GET"})
     */
    public function indexAction(Request $request,$name,$page='1')
    {  
        // $baseDeDatos = $this->getDoctrine()->getRepository('AppBundle:NombreDeLaBaseDeDatos')->findAll();

        
       //var_dump($request->get("hola"));die();
       $var = 'hola vengo desde el controlador';
        // replace this example code with whatever you need
        return $this->render('AppBundle:pruebas:index.html.twig', array('texto' => $name." - ".$page,'var' => $var));
    }
}
