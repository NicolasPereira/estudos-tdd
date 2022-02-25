<?php

namespace App\Desafio002\app\User;

/**
 * Class User
 * @package App\Desafio002\app\User
 */
class User
{

    /**
     * @param string $name
     * @param bool|null $coHost
     */
    public function __construct(
        protected string $name,
        protected ?bool $coHost = false
    )
    {

    }

    /**
     * @return string
     */
    protected function name(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     * @return void
     */
    protected function updateName(string $name): void
    {
        $this->setName($name);
    }

    /**
     * @return bool
     */
    protected function host(): bool
    {
        return $this->coHost;
    }

    /**
     * @param bool $status
     * @return void
     */
    protected function setCoHost(bool $status): void
    {
        $this->coHost = $status;
    }
}