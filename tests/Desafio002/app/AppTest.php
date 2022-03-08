<?php

namespace Desafio002\app;

use App\Desafio002\app\App;
use PHPUnit\Framework\TestCase;


class AppTest extends TestCase
{
    public function testShouldAppReturnTrue()
    {
        $app = new App();
        $this->assertTrue(true);
    }
}
