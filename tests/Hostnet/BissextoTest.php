<?php

namespace Hostnet;

use Hostnet\Bissexto;
use PHPUnit\Framework\TestCase;

class BissextoTest extends TestCase
{

    public function testVerificarDivisivelPor4()
    {
        $bissexto = new Bissexto();

        $result = $bissexto->divisivelPor4(4);

        $this->assertEquals(true, $result);
    }

    public function testVerificarNaoDivisivelPor100()
    {
        $bissexto = new Bissexto();

        $result = $bissexto->naoDivisivelPor100(100);

        $this->assertEquals(false, $result);
    }

    public function testVerificarDivisivelPor400()
    {
        $bissexto = new Bissexto();

        $result = $bissexto->divisivelPor400(400);

        $this->assertEquals(true, $result);
    }

    public function testAnoBissexto()
    {

        $bissexto = new Bissexto();

        $resultado = $bissexto->verificarBissexto(1600);

        $this->assertEquals(true, $resultado);
    }

    public function testNaoEhAnoBissexto()
    {
        $bissexto = new Bissexto();

        $resultado = $bissexto->verificarBissexto(100);

        $this->assertFalse($resultado);
    }
}
