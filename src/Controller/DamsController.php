<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DamsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index2(): Response
    {
        return $this->render('dams/index2.html.twig', [
            'controller_name' => 'DamsController',
        ]);
    }

    #[Route('/portfolio', name: 'portfolio')]
    public function index3(): Response
    {
        return $this->render('dams/index3.html.twig', [
            'controller_name' => 'DamsController',
        ]);
    }
    #[Route('/cv', name: 'cv')]
    public function index4(): Response
    {
        return $this->render('dams/index4.html.twig', [
            'controller_name' => 'DamsController',
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function index5(): Response
    {
        return $this->render('dams/index5.html.twig', [
            'controller_name' => 'DamsController',
        ]);
    }
}
