<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/home")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/",name="home_index",methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}