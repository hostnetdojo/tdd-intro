<?php

namespace Hostnet;

use Hostnet\Intervalo;
use PHPUnit\Framework\TestCase;

class IntervaloTest extends TestCase
{
    /**
     * Verifica a inserção de um número na lista vazia
     *
     * @covers Hostnet\Intervalo::processar()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     *
     * @return void
     */
    public function testInserirNaListaVazia()
    {
        $intervalo = new Intervalo();

        $lista = $intervalo->processar(100);

        # Verifica se é um array só com um índice
        $this->assertEquals(1, count($lista));

        # Verifica se o prmeiro elemento é um array só com um índice
        $this->assertEquals(1, count($lista[0]));

        # Verifica se o elemento inserido é o elemento que passamos
        $this->assertEquals(100, $lista[0][0]);
    }

    /**
     * Verifica a inserção de números em sequencia na lista
     *
     * @covers Hostnet\Intervalo::processar()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     *
     * @return void
     */
    public function testInserirNumerosEmSequencia()
    {
        $intervalo = new Intervalo();

        $lista = $intervalo->processar(100, 101);

        # Verifica se é um array só com um índice
        $this->assertEquals(1, count($lista));

        # Verifica se o primeiro elemento é um array com dois índices
        $this->assertEquals(2, count($lista[0]));

        # Verifica se os elementos inseridos são os elementos que passamos
        $this->assertEquals(100, $lista[0][0]);
        $this->assertEquals(101, $lista[0][1]);
    }

    /**
     * Verifica a inserção de números separados na lista
     *
     * @covers Hostnet\Intervalo::processar()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     *
     * @return void
     */
    public function testInserirNumerosEmSeparados()
    {
        $intervalo = new Intervalo();

        $lista = $intervalo->processar(100, 102);

        # Verifica se é um array só com um índice
        $this->assertEquals(2, count($lista));

        # Verifica se existem dois elementos com um índice
        $this->assertEquals(1, count($lista[0]));
        $this->assertEquals(1, count($lista[1]));

        # Verifica se os elementos inseridos são os elementos que passamos
        $this->assertEquals(100, $lista[0][0]);
        $this->assertEquals(102, $lista[1][0]);
    }

    /**
     * Verifica a inserção de vários números em sequencia e separados na lista
     *
     * @covers Hostnet\Intervalo::processar()
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     *
     * @return void
     */
    public function testInserirNumerosReais()
    {
        $intervalo = new Intervalo();

        $lista = $intervalo->processar(100, 101, 102, 104, 105, 1, 2, 3, 7);

        # Verifica se é um array com quatro índices
        $this->assertEquals(4, count($lista));

        # Verifica a contagem de ítens em cada índice
        $this->assertEquals(3, count($lista[0]));
        $this->assertEquals(1, count($lista[1]));
        $this->assertEquals(3, count($lista[2]));
        $this->assertEquals(2, count($lista[3]));

        # Verifica se os elementos inseridos são os elementos que passamos
        $this->assertEquals(1, $lista[0][0]);
        $this->assertEquals(2, $lista[0][1]);
        $this->assertEquals(3, $lista[0][2]);
        $this->assertEquals(7, $lista[1][0]);
        $this->assertEquals(100, $lista[2][0]);
        $this->assertEquals(101, $lista[2][1]);
        $this->assertEquals(102, $lista[2][2]);
        $this->assertEquals(104, $lista[3][0]);
        $this->assertEquals(105, $lista[3][1]);
    }
}
