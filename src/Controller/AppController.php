<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/blank")
     */
    public function blank()
    {
        return $this->render('blank.html.twig');
    }
    /**
     * @Route("/", name="/" )
     */
    public function index()
    {
        return $this->render('blank.html.twig');
    }
}
