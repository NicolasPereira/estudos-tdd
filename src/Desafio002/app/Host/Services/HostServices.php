<?php
declare(strict_types=1);

namespace App\Desafio002\app\Host\Services;

use App\Desafio002\app\Host\Host;
use App\Desafio002\app\User\User;

class HostServices
{
    public function makeCoHostUser(User $user): void
    {
        $user->coHost = true;
    }
}