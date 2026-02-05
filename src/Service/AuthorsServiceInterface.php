<?php

namespace App\Service;

interface AuthorsServiceInterface
{
    /** 
    * @return array{valid: bool, errors: array<string>, data?: array}
    */

    public function createAuthor(string $name): array;
}