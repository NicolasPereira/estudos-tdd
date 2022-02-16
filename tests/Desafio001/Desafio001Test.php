<?php

namespace Desafio001;

use PHPUnit\Framework\TestCase;
use Root\Www\Desafio001\Desafio001;

class Desafio001Test extends TestCase
{
    public function test_should_return_hello_world()
    {
        //Arrange
        $instance = new desafio001();
        $expected = 'Olá Mundo'.PHP_EOL;

        //Act
        $result = $instance->execute();

        //Assert
        $this->assertEquals($result, $expected);
    }
}