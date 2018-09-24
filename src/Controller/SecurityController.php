<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(Request $request, AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();

        $lastUsername = $utils->getLastUsername();
        return $this->render('security/login.html.twig', [
            'error' => $error,
            'last_username' => $lastUsername
        ]);
    }
    
    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {

    }
    
    /**
     * @Route("/admin/add")
     */
    public function add(UserPasswordEncoderInterface $encoder)
    {
        $user = new \App\Entity\User();
        $pass = "123456";
        $encoded = $encoder->encodePassword($user,$pass);
        $user->setPassword($encoded);
        $user->setUsername("admin");
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
    }
}
