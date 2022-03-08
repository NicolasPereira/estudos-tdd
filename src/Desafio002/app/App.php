<?php

declare(strict_types=1);

namespace App\Desafio002\app;

use App\Desafio002\app\Host\Host;
use App\Desafio002\app\User\User;
use App\Desafio002\app\Host\Services\HostServices;

class App {

    public function index(): User
    {
        $user = new User('nicolas');
        $hostService = new HostServices();
        $host = new Host('nicolas', $hostService);
        $host->makeCoHostUser($user);
        return $user;
    }
}