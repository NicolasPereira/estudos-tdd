<?php

declare(strict_types=1);

namespace App\Desafio002\app;

use App\Desafio002\app\Student\Student;

class App {

    public function index(): string
    {
        $user = new Student('nicolas');
        return $user->name();
    }
}