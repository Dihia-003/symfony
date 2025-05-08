<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]
    public function index(): Response
    {
        // Exemple de liste d'articles (id, titre, publié ?)
        $articles = [
            ['id' => 1, 'titre' => 'Découverte de Symfony',    'publie' => true],
            ['id' => 2, 'titre' => 'Les nouveautés de PHP 8.1', 'publie' => false],
            ['id' => 3, 'titre' => 'Twig pour les débutants',   'publie' => true],
        ];

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
