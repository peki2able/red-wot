<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    /**
	 * @Route("/", name="player")
	 */
	public function index(): Response
	{
		return $this->render('player/test.html.twig');
	}
	/**
	 * @Route("/api/player", name="app_player_api")
	 */
	public function indexApi(): JsonResponse
	{
		return $this->json([
			'message' => 'Welcome to your new controller!',
			'path' => 'src/Controller/PlayerController.php',
		]);

	}
}