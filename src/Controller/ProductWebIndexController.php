<?php

declare(strict_types = 1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class ProductWebIndexController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke()
    {
        $view = $this->twig->render('product/index.html.twig', [
            'products' => [
                ['name' => 'hola',],
            ]
        ]);

        return new Response($view);
    }
}