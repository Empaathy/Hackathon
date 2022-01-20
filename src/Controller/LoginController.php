<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(AuthenticationUtils $authentificationUtils): Response
    {
        $lastUsername = $authentificationUtils->getLastUsername();
        return $this->render('login/index.html.twig', [
            'last_username' => $lastUsername
        ]);
    }
}
