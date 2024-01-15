<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CamaraController extends AbstractController
{
    #[Route('/camara', name: 'app_camara')]
    public function index(): Response
    {
        return $this->render('camara/index.html.twig', [
            'controller_name' => 'CamaraController',
        ]);
    }
}
