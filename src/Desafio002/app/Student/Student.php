<?php
declare(strict_types=1);

namespace App\Desafio002\app\Student;



use App\Desafio002\app\User\User;

class Student extends User
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

}