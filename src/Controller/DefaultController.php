<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        $template = 'default/index.html.twig';
        $args = [];

        return $this->render($template, $args);
    }
    #[Route('/bid', name: 'bid')]
    public function bid(): Response
    {
        $template = 'bid/index.html.twig';
        $args = [];
        return $this->render($template,$args);
    }
    #[Route('/', name: 'Admin')]
    public function make(): Response
    {
        $template = 'make/index.html.twig';
        $args = [];
        return $this->render($template,$args);
    }
}
