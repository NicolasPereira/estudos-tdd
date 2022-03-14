<?php

namespace Desafio002\app\User;

use App\Desafio002\app\ClassRoom\ClassRoom;
use App\Desafio002\app\Host\Host;
use App\Desafio002\app\User\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testShouldReturnUserInstance()
    {
        $user = new User('nicolas');

        $this->assertInstanceOf(User::class, $user);
    }

    public function testShouldHostMuteUser()
    {
        $host = $this->createHost();
        $user = $this->createUser();

        $host->muteUser($user);
        $this->assertFalse($user->microphoneActive);
    }

    public function testShouldHostCanMuteAllUser()
    {
        $host = $this->createHost();
        $user1 = $this->createUser();
        $user2 = $this->createUser();
        $user3 = $this->createUser();
        $participantList = [$user1, $user2, $user3];
        $classRoom = $this->createRoom($participantList);

        $host->muteAllUser($classRoom);

        foreach ($classRoom->participantList as $student)
        {
            $this->assertFalse($student->microphoneActive);
        }
    }

    public function testShouldAddUserInClassRoom()
    {
        $host = $this->createHost();
        $user1 = $this->createUser();
        $classRoom = new ClassRoom([]);
        $host->addParticipantInClassRoom($user1, $classRoom);
        $this->assertContains($user1, $classRoom->participantList);
    }

    public function testShouldUserDontHavePermissionAddUserInClassRoom()
    {
        $host = $this->createUser();
        $user1 = $this->createUser();
        $classRoom = $this->createRoomWithParticipants(0);
        $result = $host->addParticipantInClassRoom($user1, $classRoom);
        $this->assertEquals('Você não tem permissão para adicionar usuários', $result);
    }

    public function testShouldReturnErroIfClassRoomFull()
    {
        $host = $this->createHost();
        $user1 = $this->createUser();
        $classRoom = $this->createRoomWithParticipants(30);
        $result = $host->addParticipantInClassRoom($user1, $classRoom);
        $this->assertEquals('A sala já está lotada', $result);
    }

    private function createHost(): Host
    {
        return new Host('Host');
    }

    private function createUser(): User
    {
        return new User('User');
    }

    private function createRoom(array $participantList): ClassRoom
    {
        return new ClassRoom($participantList);
    }

    private function createRoomWithParticipants(int $number): ClassRoom
    {
        $participants = [];
        for($x = 0; $x <= $number; $x++)
        {
            $participants[] = $this->createUser();
        }

        return $this->createRoom($participants);
    }
}