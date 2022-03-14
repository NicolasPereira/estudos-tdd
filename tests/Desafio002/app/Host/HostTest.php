<?php

namespace Desafio002\app\Host;

use App\Desafio002\app\ClassRoom\ClassRoom;
use App\Desafio002\app\Host\Host;
use App\Desafio002\app\User\User;
use PHPUnit\Framework\TestCase;

class HostTest extends TestCase
{
    public function testShouldReturnHostInstance()
    {
        $host = $this->createHost();

        $this->assertInstanceOf(Host::class, $host);
    }

    public function testShouldReturnCoHostAttributeIsTrue()
    {
        $host = $this->createHost();
        $this->assertTrue($host->coHost);
    }

    public function testShouldHostMakeCoHostUser()
    {
        $host = $this->createHost();
        $user = $this->createUser();
        $host->chargeUserHost($user);
        $this->assertTrue($user->coHost);
    }
    private function createHost(): Host
    {
        return new Host('Host');
    }

    private function createUser(): User
    {
        return new Host('User');
    }

}