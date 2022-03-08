<?php
declare(strict_types=1);

namespace App\Desafio002\app\Host;

use App\Desafio002\app\Host\Services\HostServices;
use App\Desafio002\app\User\User;

class Host extends User
{
    public function __construct(
        string $name, 
        private HostServices $service
    ){
        parent::__construct($name, true);
    }

    public function makeCoHostUser(User $user): void
    {
        $this->service->makeCoHostUser($user);
    }
}