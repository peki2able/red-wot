<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/conference", name="conference")
     */
    public function index(Request $request): Response
    {
        $greet = '';
        if($name = $request->query->get('hello')){
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
        return new Response(<<<EOF
        <html>
            <body style="margin:0 auto;width:80%">
            $greet
                <img style="width:100%;margin:0 auto;height:auto;" src="/images/under-construction.jpg" />
            </body>
        </html>
        EOF
        );
    }
}
