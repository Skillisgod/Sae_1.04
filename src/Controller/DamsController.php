<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DamsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index.html.twig.twig', [
            'controller_name' => 'DamsController',
        ]);
    }

    #[Route('/portfolio', name: 'portfolio')]
    public function portfolio(): Response
    {
        return $this->render('portfolio.twig', [
            'controller_name' => 'DamsController',
        ]);
    }

    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('cv.twig', [
            'controller_name' => 'DamsController',
        ]);
    }

    #[Route('/projets', name: 'projets')]
    public function projets(): Response
    {
        return $this->render('projets.twig', [
            'controller_name' => 'DamsController',
        ]);
    }
}
