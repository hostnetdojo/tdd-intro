<?php

namespace Hostnet;

use Hostnet\Corredor;
use PHPUnit\Framework\TestCase;

class CorredorTest extends TestCase
{
    public function testaVolta()
    {
        $corredor = new Corredor();
        $resultado = $corredor->percorre();
        $this->assertEquals(true, is_array($resultado));
    }

    public function testBoolean()
    {
        $corredor = new Corredor();
        $resultado = $corredor->percorre();
        $this->assertInternalType('boolean', $resultado[1]);
    }

    public function testDeveRetornarMesmoNumeroPassado()
    {
        $corredor = new Corredor(7);

        $resultado = $corredor->percorre();

        $this->assertEquals(7, count($resultado));
    }


    public function testMarcarOff()
    {
        $corredor = new Corredor(3);

        $resultado = $corredor->percorre();

        $this->assertEquals(true, $resultado[1]);
        $this->assertEquals(false, $resultado[2]);
        $this->assertEquals(false, $resultado[3]);
    }
}
