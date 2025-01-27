<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ControlerWithTwigController extends AbstractController
{
    #[Route('/controler/with/twig', name: 'app_controler_with_twig')]
    public function index(): Response
    {
        return $this->render('controler_with_twig/index.html.twig', [
            'controller_name' => 'ControlerWithTwigController',
        ]);
    }
}
