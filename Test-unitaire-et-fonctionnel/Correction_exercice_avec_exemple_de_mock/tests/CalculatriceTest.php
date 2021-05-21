<?php

use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{

    public function testAdd()
    {
        $c = new Calculatrice();
        $this->assertEquals(5, $c->add(2, 3));
    }

    public function testSubNominal()
    {
        $c = new Calculatrice();
        $this->assertEquals(7, $c->sub(10, 3));
    }

    public function testSubNegative()
    {
        $c = new Calculatrice();
        $this->assertEquals(-7, $c->sub(3, 10));
    }

    public function testMulNominal()
    {
        $c = new Calculatrice();
        $this->assertEquals(30, $c->mul(3, 10));
    }

    public function testDivByZero()
    {
        $c = new Calculatrice();
        $this->expectException(Exception::class);
        $c->div(5, 0);
    }
}