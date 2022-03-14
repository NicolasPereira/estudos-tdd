<?php

namespace App\Desafio002\app\ClassRoom;

class ClassRoom
{
    const MAX_CAPACITY = 25;

    public function __construct(
        public array $participantList
    ){}

    public function quantityParticipants(): int
    {
        return count($this->participantList);
    }
}