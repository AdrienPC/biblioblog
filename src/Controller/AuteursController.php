<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuteursController extends AbstractController
{
    /**
     * @Route("/auteurs", name="auteurs")
     */
    public function index(): Response
    {
        return $this->render('auteurs/index.html.twig', [
            'controller_name' => 'AuteursController',
        ]);
    }

   /**
     * @Route("/auteurs/voir_auteur", name="voir_auteur")
     */
    public function voir_auteur(): Response
    {
        return $this->render('auteurs/voir_auteur.html.twig', [
            'controller_name' => 'AuteursController',
        ]);
    }

    /**
     * @Route("/auteurs/modifier_auteur", name="modifier_auteur")
     */
    public function modifier_auteur(): Response
    {
        return $this->render('auteurs/modifier_auteur.html.twig', [
            'controller_name' => 'AuteursController',
        ]);
    }

    /**
     * @Route("/auteurs/supprimer_auteur", name="supprimer_auteur")
     */
    public function supprimer_auteur(): Response
    {
        return $this->render('auteurs/supprimer_auteur.html.twig', [
            'controller_name' => 'AuteursController',
        ]);
    }

    /**
     * @Route("/auteurs/ajouter_auteur", name="ajouter_auteur")
     */
    public function ajouter_auteur(): Response
    {
        return $this->render('auteurs/ajouter_auteur.html.twig', [
            'controller_name' => 'AuteursController',
        ]);
    }

}
