<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        dump("It's working"); // a beautiful var_dump
        die();
    }
    /**
     * @Route("/test/{age<\d+>?0}", name="test", method={"GET", "POST"},
     * host="localhost", schemes={"http","https"})
     * 
     */
    public function test(Request $request, $age)
    {
        // $request = Request::createFromGlobals();
        // $age = $_GET['age'];
        // dump($request);
        // $age = $request->query->get('age', 0);
        // $age = $request->attributes->get('age');
        // dd(); // == dump and die
        return new Response("Vous avez $age");
    }
}
