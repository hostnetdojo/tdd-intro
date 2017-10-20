<?php

namespace Hostnet;

use Hostnet\Calculadora;
use Hostnet\Helper\TestCase;

class CalculadoraTest extends TestCase
{
    /**
     * Testa o método de soma da forma mais simples
     *
     * @covers Hostnet\Calculadora::somar()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testSomarUmMaisUm()
    {
        # Instancia a calculadora
        $calculadora = new Calculadora();

        # Efetua a operação
        $resultado = $calculadora->somar(1, 1);

        # testa o resultado
        $this->assertEquals(2, $resultado);
    }

    /**
     * Testa o método de soma para números diferentes
     *
     * @covers Hostnet\Calculadora::somar()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testSomarNumerosDiferentes()
    {
        # Instancia a calculadora
        $calculadora = new Calculadora();

        # Efetua a operação
        $resultado = $calculadora->somar(3, 7);

        # testa o resultado
        $this->assertEquals(10, $resultado);
    }

    public function testVerificarNumerosNegativos()
    {

        # Instancia a calculadora
        $calculadora = new Calculadora();

        $resultado = $calculadora->somar(-4, -10);

        $this->assertEquals(-14, $resultado);
    }

    public function testVerificarTexto()
    {
        $calculadora = new Calculadora();

        $resultado = $calculadora->somar('texto', 'quebrar');

        $this->assertEquals(false, $resultado);
    }

    public function testVariosArgumentos()
    {
        $calculadora = new Calculadora();

        $resultado = $calculadora->somar(1, 1, 1, 1, 1);

        $this->assertEquals(5, $resultado);
    }
}
