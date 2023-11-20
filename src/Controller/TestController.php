<?php

// src/Controller/TestController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="app_test")
     */
    public function test(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to the test controller!',
            'path' => 'src/Controller/TestController.php',
        ]);
    }
}

