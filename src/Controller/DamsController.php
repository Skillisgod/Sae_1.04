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
        return $this->render('index.html.twig.twig', [
            'controller_name' => 'DamsController',
        ]);
    }
}
