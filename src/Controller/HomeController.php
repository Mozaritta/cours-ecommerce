<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/home/{nom?World}", name="home", methods={"GET","POST"},
     * host="localhost", schemes={"http","https"})
     */
    public function home($nom)
    {
        return new Response("Hello $nom");
    }
}
