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
     * Testa o método de soma da forma mais simples
     *
     * @covers Hostnet\Calculadora::somar()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testSomarUmMaisDois()
    {
        # Instancia a calculadora
        $calculadora = new Calculadora();

        # Efetua a operação
        $resultado = $calculadora->somar(1, 2);

        # testa o resultado
        $this->assertEquals(3, $resultado);
    }
}
