<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\AuthorsServiceInterface;

final class AuthorsController extends AbstractController
{
    #[Route('/authors', name: 'app_authors')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AuthorsController.php',
        ]);
    }

    
    #[Route('/authors_create', name: 'app_authors_create', methods: ['POST'])]
    public function create(Request $request, AuthorsServiceInterface $authorsService): JsonResponse
    {
        $data = $request->toArray();

        $name = $data['name'] ?? null;

        if (!$name) {
            return $this->json([
                'message' => 'Name is required',
            ], 400);
        }

        return $this->json([
            'data' => $authorsService->createAuthor($name),
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AuthorsController.php',
        ]);
    }
}
