<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CamaraController extends AbstractController
{
    #[Route('/camara', name: 'acceuil')]
    public function index()
    {
        return $this->render('camara/index.html.twig', [
            
        ]);
    }
	#[Route('/page1', name: 'page1')]
    public function page1()
    {
        return $this->render('camara/page1.html.twig', [
        ]);
    }
	#[Route('/page2', name: 'page2')]
    public function page2()
    {
        return $this->render('camara/page2.html.twig', [
        ]);
    }#[Route('/ensavoirplus', name: 'En savoir plus ')]
    public function ensavoirplus()
    {
        return $this->render('camara/En_savoir_plus.html.twig', [
        ]);
    }
}
