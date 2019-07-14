<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController
{

    /**
     * @Route("/hello", name="app_hello")
     */
    public function login(Request $request): Response
    {
       return Response::create("Hello world");
    }

}
