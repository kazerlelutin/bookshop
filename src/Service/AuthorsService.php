<?php
namespace App\Service;

final class AuthorsService implements AuthorsServiceInterface
{
    public function createAuthor(string $name): array
    {
        // Here you would typically interact with the database to create a new author.
        // For demonstration purposes, we'll just return a mock response.

        return [
            'id' => rand(1, 100), // Mock ID generation
            'name' => $name,
        ];
    }
}