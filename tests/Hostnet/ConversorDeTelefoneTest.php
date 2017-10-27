<?php

namespace Hostnet;

use Hostnet\ConversorDeTelefone;
use Hostnet\Helper\TestCase;

class ConversorDeTelefoneTest extends TestCase
{
    public function testRetornaUm()
    {
        $conversor = new ConversorDeTelefone();

        $resultado = $conversor->converte('1');

        $this->assertEquals('1', $resultado);
    }

    public function testRetornaZero()
    {
        $conversor = new ConversorDeTelefone();

        $resultado = $conversor->converte('0');

        $this->assertEquals('0', $resultado);
    }

    public function testRetornaHifen()
    {
        $conversor = new ConversorDeTelefone();

        $resultado = $conversor->converte('-');

        $this->assertEquals('-', $resultado);
    }

    public function testConverterParaDois()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoA = $conversor->converte('A');
        $resultadoB = $conversor->converte('B');
        $resultadoC = $conversor->converte('C');

        $this->assertEquals(2, $resultadoA);
        $this->assertEquals(2, $resultadoB);
        $this->assertEquals(2, $resultadoC);
    }

    public function testConverterParaTres()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoA = $conversor->converte('D');
        $resultadoB = $conversor->converte('E');
        $resultadoC = $conversor->converte('F');

        $this->assertEquals(3, $resultadoA);
        $this->assertEquals(3, $resultadoB);
        $this->assertEquals(3, $resultadoC);
    }

    public function testConverterParaQuatro()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoA = $conversor->converte('G');
        $resultadoB = $conversor->converte('H');
        $resultadoC = $conversor->converte('I');

        $this->assertEquals(4, $resultadoA);
        $this->assertEquals(4, $resultadoB);
        $this->assertEquals(4, $resultadoC);
    }

    public function testConverterParaCinco()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoA = $conversor->converte('J');
        $resultadoB = $conversor->converte('K');
        $resultadoC = $conversor->converte('L');

        $this->assertEquals(5, $resultadoA);
        $this->assertEquals(5, $resultadoB);
        $this->assertEquals(5, $resultadoC);
    }

    public function testConverterParaSeis()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoA = $conversor->converte('M');
        $resultadoB = $conversor->converte('N');
        $resultadoC = $conversor->converte('O');

        $this->assertEquals(6, $resultadoA);
        $this->assertEquals(6, $resultadoB);
        $this->assertEquals(6, $resultadoC);
    }

    public function testConverterParaSete()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoA = $conversor->converte('P');
        $resultadoB = $conversor->converte('Q');
        $resultadoC = $conversor->converte('R');
        $resultadoD = $conversor->converte('S');

        $this->assertEquals(7, $resultadoA);
        $this->assertEquals(7, $resultadoB);
        $this->assertEquals(7, $resultadoC);
        $this->assertEquals(7, $resultadoD);
    }

    public function testConverterParaOito()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoA = $conversor->converte('T');
        $resultadoB = $conversor->converte('U');
        $resultadoC = $conversor->converte('V');

        $this->assertEquals(8, $resultadoA);
        $this->assertEquals(8, $resultadoB);
        $this->assertEquals(8, $resultadoC);
    }

    public function testConverterParaNove()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoA = $conversor->converte('W');
        $resultadoB = $conversor->converte('X');
        $resultadoC = $conversor->converte('Y');
        $resultadoD = $conversor->converte('Z');

        $this->assertEquals(9, $resultadoA);
        $this->assertEquals(9, $resultadoB);
        $this->assertEquals(9, $resultadoC);
        $this->assertEquals(9, $resultadoD);
    }

    public function testMultiplosCaracteres()
    {
        $conversor = new ConversorDeTelefone();

        $resultado = $conversor->converte('VEM-MONSTRO');

        $this->assertEquals('836-6667876', $resultado);
    }
}
