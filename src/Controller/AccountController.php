<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
    public function account()
    {
        return new Response($this->twig->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]));
    }
}
