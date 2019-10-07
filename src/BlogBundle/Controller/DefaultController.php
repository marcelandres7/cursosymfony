<?php

namespace BlogBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
     
    public function indexActionold()
    {
       $em = $this->getDoctrine()->getEntityManager();
        $entry_repo = $em->getRepository("BlogBundle:Entry");
        $entries = $entry_repo->findAll();

        foreach ($entries as $entry){
            echo $entry->getTitle()."<br/>";
            echo $entry->getCategory()->getName()."<br/>";
            echo $entry->getUser()->getName()."<br/>"; 

            $tags = $entry->getEntryTag();
            foreach ($tags as $tag){
                echo $tag->getTag()->getName().", ";
            }
            
            echo "<hr/>";
        }

        die();

        return $this->render('BlogBundle:Default:index.html.twig');
    }

    public function indexAction(){
 
        return $this->render('BlogBundle:Default:index.html.twig');

    }
}
