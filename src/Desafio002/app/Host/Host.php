<?php
declare(strict_types=1);

namespace App\Desafio002\app\Host;

use App\Desafio002\app\User\User;

class Host extends User
{
    public function __construct(
        string $name,
    ){
        parent::__construct($name, true);
    }

    public function chargeUserHost(User $user)
    {
        $user->coHost = true;
    }
}