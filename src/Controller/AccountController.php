<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Twig\Environment;

class AccountController
{
    /**
     * @var Environment
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/account", name="account")
     */
    public function account(UserInterface $user)
    {
        return new Response($this->twig->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]));
    }
}
