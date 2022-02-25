<?php

namespace Desafio002\app\User;

use App\Desafio002\app\User\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testShouldReturnUserInstance()
    {
        $user = new User('nicolas');

        $this->assertInstanceOf(User::class, $user);
    }
}