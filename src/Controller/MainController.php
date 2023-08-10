<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class MainController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function accueil(): Response
    {
        return $this->render('main/accueil.html.twig');
    }

    #[Route('/presentation', name: 'presentation')]
    public function presentation(): Response
    {
        return $this->render('main/presentation.html.twig');
    }

    #[Route('/professeurs', name: 'professeurs')]
    public function professeurs(): Response
    {
        return $this->render('main/professeurs.html.twig');
    }

    #[Route('/votes', name: 'votes')]
    public function votes(): Response
    {
        return $this->render('main/votes.html.twig');
    }

    #[Route('/classement', name: 'classement')]
    public function classement(): Response
    {
        return $this->render('main/classement.html.twig');
    }

    #[Route('/actualites', name: 'actualites')]
    public function actualites(): Response
    {
        return $this->render('main/actualites.html.twig');
    }

    #[Route('/crunchyroll', name: 'crunchyroll')]
    public function crunchyroll(): Response
    {
        return $this->render('main/crunchyroll.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig');
    }




    private EntityManagerInterface $entityManager;
    private Security $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

}
