<?php

namespace Hostnet;

use Hostnet\FizzBuzz;
use Hostnet\Helper\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * Testa o método de soma da forma mais simples
     *
     * @covers Hostnet\Calculadora::somar()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function testChecaCemItens()
    {
        # Instancia a calculadora
        $fizzbuzz = new FizzBuzz();

        # Efetua a operação
        $lista = $fizzbuzz->geraLista();

        # testa o resultado
        $this->assertEquals(100, count($lista));
    }

    public function testGeraFizz()
    {
        #instancia
        $fizzbuzz = new FizzBuzz();

        $valor = $fizzbuzz->geraFizz(3);

        # testa se é divisível por 3
        $this->assertEquals('Fizz', $valor);
    }

    public function testGeraBuzz()
    {
        #instancia
        $fizzbuzz = new FizzBuzz();

        $valor = $fizzbuzz->geraBuzz(5);

        # testa se é divisível por 5
        $this->assertEquals('Buzz', $valor);
    }

    public function testFizzBuzz()
    {
        # Instancia a calculadora
        $fizzbuzz = new FizzBuzz();

        # Efetua a operação
        $lista = $fizzbuzz->geraLista();

        # testa o resultado
        $this->assertEquals('FizzBuzz', $lista[15]);
    }
}
