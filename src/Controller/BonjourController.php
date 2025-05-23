<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController 
{
    // Définir la route avec un paramètre {nom}
    #[Route('/bonjour/{nom}', name: 'app_bonjour')] 
    public function index(string $nom): Response 
    {
        // Rendre la vue et passer le paramètre `nom` à Twig
        return $this->render('bonjour/index.html.twig', [ 
            'controller_name' => 'BonjourController',
            'nom' => $nom,  // Transmettre la variable `nom`
        ]);
    }
}
