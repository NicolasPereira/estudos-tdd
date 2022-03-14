<?php

namespace Desafio002\app\ClassRoom;

use App\Desafio002\app\ClassRoom\ClassRoom;
use App\Desafio002\app\Student\Student;
use PHPUnit\Framework\TestCase;

class ClassRoomTest extends TestCase
{
    public function testShouldReturnClassRoomInstance()
    {
        $classRoom = $this->createClassRoom();

        $this->assertInstanceOf(ClassRoom::class, $classRoom);
    }

    public function testShouldReturnNumberOfParticipantsInTheClassRoom()
    {
        $classRoom = $this->createClassRoom();
        $quantityParticipants = $classRoom->quantityParticipants();
        $this->assertEquals(count($classRoom->participantList), $quantityParticipants);
    }

    private function createClassRoom(): ClassRoom
    {
        $user1 = new Student('Student');
        $user2 = new Student('Student');
        $user3 = new Student('Student');

        return new ClassRoom([$user1, $user2, $user3]);
    }

}