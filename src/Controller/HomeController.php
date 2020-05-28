<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index()
    {
        return new Response(
            '<html><body><h1>Home</h1></body></html>'
        );
    }
}