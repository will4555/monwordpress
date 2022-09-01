<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    // Intercepte la route
    #[Route('/bonjour', name: 'app_bonjour')]
    public function index(): Response
    {
        $firstname = "Rudy";
        // Renvoi la reponse
        return $this->render('bonjour/index.html.twig', [
            'firstname' => $firstname
        ]);
    }
}
