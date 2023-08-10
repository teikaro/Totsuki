<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

#[Route('/membre', name: 'membre_')]
class MemberController extends AbstractController
{
    #[Route('/inscription', name: 'inscription')]
    public function inscription(): Response
    {
        return $this->render('member/inscription.html.twig');
    }

    #[Route('/compte', name: 'compte')]
    public function compte(): Response
    {
        return $this->render('member/compte.html.twig');
    }

    #[Route('/proposition-plat', name: 'proposition_plat')]
    public function proposition(): Response
    {
        return $this->render('member/proposition_plat.html.twig');
    }

    private EntityManagerInterface $entityManager;
    private Security $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }
}
