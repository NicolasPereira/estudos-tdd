<?php

namespace App\Desafio002\app\User;

class User
{
    public function __construct(
        public readonly string $name,
        public bool $coHost = false
    )
    {

    }
}
