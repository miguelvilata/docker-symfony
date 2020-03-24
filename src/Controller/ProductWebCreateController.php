<?php

declare(strict_types = 1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class ProductWebCreateController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(Request $request)
    {
        //desde la request genero un dto
        //genero un form a la manera tradicional
        //si es valido extraigo el objeto asociado y lo encapsulo en un dto (o la propia entidad podría actual como tal)
        //podré crear un formulario sin getters/setters en la entidad
        //llamo a un applicattion service que resuelve un caso de uso y recibe este dto
        //el dto recibe el validador de symfony y valida la entidad antes de su persistencia

        $view = $this->twig->render('product/create.html.twig');

        return new Response($view);
    }
}