<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DenemeController extends AbstractController
{
    /**
     * @Route("/deneme", name="deneme")
     */
    public function index(): Response
    {
        return $this->render('deneme/index.html.twig', [
            'controller_name' => 'DenemeController',
        ]);
    }
}