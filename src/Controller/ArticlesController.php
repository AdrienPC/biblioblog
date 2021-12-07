<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/articles")
     */

class ArticlesController extends AbstractController
{
    /**
     * @Route("/", name="articles")
     */
    public function index(): Response
    {
        return $this->render('articles/index.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }

    /**
     * @Route("/voir_article", name="voir_article")
     */
    public function voir_article(): Response
    {
        return $this->render('articles/voir_article.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }

    /**
     * @Route("/modifier_article", name="modifier_article")
     */
    public function modifier_article(): Response
    {
        return $this->render('articles/modifier_article.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }

    /**
     * @Route("/supprimer_article", name="supprimer_article")
     */
    public function supprimer_article(): Response
    {
        return $this->render('articles/supprimer_article.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }

    /**
     * @Route("/ajouter_article", name="ajouter_article")
     */
    public function ajouter_article(): Response
    {
        return $this->render('articles/ajouter_article.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }
}
