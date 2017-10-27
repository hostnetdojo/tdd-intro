<?php

namespace Hostnet;

use Hostnet\ConversorDeTelefone;
use Hostnet\Helper\TestCase;

class ConversorDeTelefoneTest extends TestCase
{
    /**
     * Testa a conversão do caractere '1'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testRetornaUm()
    {
        $conversor = new ConversorDeTelefone();

        $resultado = $conversor->converte('1');

        $this->assertEquals('1', $resultado);
    }

    /**
     * Testa a conversão do caractere '0'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testRetornaZero()
    {
        $conversor = new ConversorDeTelefone();

        $resultado = $conversor->converte('0');

        $this->assertEquals('0', $resultado);
    }

    /**
     * Testa a conversão do caractere '-'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testRetornaHifen()
    {
        $conversor = new ConversorDeTelefone();

        $resultado = $conversor->converte('-');

        $this->assertEquals('-', $resultado);
    }

    /**
     * Testa a conversão dos caracteres 'A', 'B' e 'C'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
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

    /**
     * Testa a conversão dos caracteres 'D', 'E' e 'F'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testConverterParaTres()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoD = $conversor->converte('D');
        $resultadoE = $conversor->converte('E');
        $resultadoF = $conversor->converte('F');

        $this->assertEquals(3, $resultadoD);
        $this->assertEquals(3, $resultadoE);
        $this->assertEquals(3, $resultadoF);
    }

    /**
     * Testa a conversão dos caracteres 'G', 'H' e 'I'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testConverterParaQuatro()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoG = $conversor->converte('G');
        $resultadoH = $conversor->converte('H');
        $resultadoI = $conversor->converte('I');

        $this->assertEquals(4, $resultadoG);
        $this->assertEquals(4, $resultadoH);
        $this->assertEquals(4, $resultadoI);
    }

    /**
     * Testa a conversão dos caracteres 'J', 'K' e 'L'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testConverterParaCinco()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoJ = $conversor->converte('J');
        $resultadoK = $conversor->converte('K');
        $resultadoL = $conversor->converte('L');

        $this->assertEquals(5, $resultadoJ);
        $this->assertEquals(5, $resultadoK);
        $this->assertEquals(5, $resultadoL);
    }

    /**
     * Testa a conversão dos caracteres 'M', 'N' e 'O'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testConverterParaSeis()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoM = $conversor->converte('M');
        $resultadoN = $conversor->converte('N');
        $resultadoO = $conversor->converte('O');

        $this->assertEquals(6, $resultadoM);
        $this->assertEquals(6, $resultadoN);
        $this->assertEquals(6, $resultadoO);
    }

    /**
     * Testa a conversão dos caracteres 'P', 'Q', 'R' e 'S'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testConverterParaSete()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoP = $conversor->converte('P');
        $resultadoQ = $conversor->converte('Q');
        $resultadoR = $conversor->converte('R');
        $resultadoS = $conversor->converte('S');

        $this->assertEquals(7, $resultadoP);
        $this->assertEquals(7, $resultadoQ);
        $this->assertEquals(7, $resultadoR);
        $this->assertEquals(7, $resultadoS);
    }

    /**
     * Testa a conversão dos caracteres 'T', 'U' e 'V'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testConverterParaOito()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoT = $conversor->converte('T');
        $resultadoU = $conversor->converte('U');
        $resultadoV = $conversor->converte('V');

        $this->assertEquals(8, $resultadoT);
        $this->assertEquals(8, $resultadoU);
        $this->assertEquals(8, $resultadoV);
    }

    /**
     * Testa a conversão dos caracteres 'W', 'X', 'Y' e 'Z'
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testConverterParaNove()
    {
        $conversor = new ConversorDeTelefone();

        $resultadoW = $conversor->converte('W');
        $resultadoX = $conversor->converte('X');
        $resultadoY = $conversor->converte('Y');
        $resultadoZ = $conversor->converte('Z');

        $this->assertEquals(9, $resultadoW);
        $this->assertEquals(9, $resultadoX);
        $this->assertEquals(9, $resultadoY);
        $this->assertEquals(9, $resultadoZ);
    }

    /**
     * Testa a conversão de múltiplos caracteres
     *
     * @covers Hostnet\ConversorDeTelefone::converte()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testMultiplosCaracteres()
    {
        $conversor = new ConversorDeTelefone();

        $resultado = $conversor->converte('VEM-MONSTRO');

        $this->assertEquals('836-6667876', $resultado);
    }
}
