<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    //Métodos Vista (Retornan vistas).
    public function default(): Response
    {
        return $this->render("default.html.twig");
    }
    
    //Métodos Archivo (Retornan archivos).
}
