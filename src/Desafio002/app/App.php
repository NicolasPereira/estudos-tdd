<?php

declare(strict_types=1);

namespace App\Desafio002\app;

use App\Desafio002\app\ClassRoom\ClassRoom;
use App\Desafio002\app\Host\Host;
use App\Desafio002\app\Student\Student;
use App\Desafio002\app\User\User;

class App {

    public function index(): User
    {
        $user = new User('nicolas');
        $student = new Student('nicolas');
        $host = new Host('nicolas');
        $host->chargeUserHost($student);
        $arrayUser = [$user, $student];
        $classRoom = new ClassRoom($arrayUser);
        return $user;
    }
}