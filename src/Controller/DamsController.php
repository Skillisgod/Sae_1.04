<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DamsController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index2(): Response
    {
        return $this->render('dams/index2.html.twig', [
            'controller_name' => 'DamsController',
        ]);
    }

    #[Route('/page2', name: 'page2')]
    public function index3(): Response
    {
        return $this->render('dams/index3.html.twig', [
            'controller_name' => 'DamsController',
        ]);
    }
}
