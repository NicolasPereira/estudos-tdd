<?php

namespace App\Desafio002\app\Student;



use App\Desafio002\app\User\User;

class Student extends User
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function updateName(string $name): void
    {
        parent::updateName($name);
    }

    public function name(): string
    {
        return parent::name();
    }
}