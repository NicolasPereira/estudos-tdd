<?php
declare(strict_types=1);

namespace App\Desafio002\app\User;

class User
{
    public function __construct(
        public readonly string $name,
        public bool $coHost = false,
        public bool $microphoneActive = false
    ){}
}
