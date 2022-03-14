<?php
declare(strict_types=1);

namespace App\Desafio002\app\User;

use App\Desafio002\app\ClassRoom\ClassRoom;

class User
{
    public function __construct(
        public readonly string $name,
        public bool $coHost = false,
        public bool $microphoneActive = false
    ){}

    public function muteUser(User $user)
    {
        if ($this->coHost) {
            $user->microphoneActive = false;
        }
    }

    public function muteAllUser(ClassRoom $room)
    {
        if ($this->coHost) {
            foreach ($room->participantList as $user)
            {
                $this->muteUser($user);
            }
        }
    }

    public function addParticipantInClassRoom(User $user, ClassRoom $classRoom)
    {
        if (!$this->coHost) {
            return 'Você não tem permissão para adicionar usuários';
        }

        if($classRoom->quantityParticipants() > $classRoom::MAX_CAPACITY)
        {
            return 'A sala já está lotada';
        }

        $classRoom->participantList[] = $user;
    }
}
