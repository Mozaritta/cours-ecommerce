<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class HomeController
{
    // protected $logger;
    // public function __construct(LoggerInterface $logger)
    // {
    //     $this->logger = $logger;
    // }
    /**
     * @Route("/home/{nom?World}", name="home", methods={"GET","POST"},
     * host="localhost", schemes={"http","https"})
     */
    public function home($nom = "World", LoggerInterface $logger)
    {
        // $this->logger->error("Mon message de log!");
        $logger->error("Mon message de log!");
        return new Response("Hello $nom");
    }
}
