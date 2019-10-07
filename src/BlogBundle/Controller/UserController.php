<?php

namespace BlogBundle\Controller;

use BlogBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\User;


class UserController extends Controller
{
     
    public function loginAction(Request $request){
        $authenticationUtils = $this->get("security.authentication_utils");
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $user = new User();
        $form = $this->createForm(UserType::class,$user);

        $form->handleRequest($request);

        if($form->isValid()){
            $user = new User();
            $user->setName($form->get("name")->getData()); 
            $user->setSurname($form->get("surname")->getData());
            $user->setEmail($form->get("email")->getData());
            $user->setPassword($form->get("password")->getData());
            $user->setRole('ROLE_USER');
            $user->setImagen('null');

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $flush = $em->flush();

            if ($flush==null){
                $status = "El usuario se creado correctamente";
            }else{
                $status = "No te has registrado correctamente";
            }

        } else {
            $status = "No te has registrado correctamente";
        }

        return $this->render("BlogBundle:User:login.html.twig",array(
            "error" => $error,
            "last_username" => $lastUsername,
            "form" => $form->createView()
        ));
    }
   
}
