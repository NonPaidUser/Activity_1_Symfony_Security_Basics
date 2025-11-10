<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class DashboardController extends AbstractController
{
    // #[IsGranted('ROLE_USER')]
    // #[Route('/dashboard', name: 'app_dashboard')]
    // public function index(): Response
    // {
    //     return new Response("Welcome to the Dashboard! (Protected Area)");
    // }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        // You can pass data to Twig like this
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'SecuirityBasics1 DashboardController',
        ]);
    }

}
