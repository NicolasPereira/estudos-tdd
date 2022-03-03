<?php

declare(strict_types=1);

namespace App\Desafio002\app;

use App\Desafio002\app\User\User;

class App {

    public function index(): string
    {
        $user = new User('nicolas');
        return $user->name;
    }
}