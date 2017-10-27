<?php

namespace Hostnet;

use Hostnet\Anagrama;
use Hostnet\Helper\TestCase;

class AnagramaTest extends TestCase
{
    public function testUmaPalavra()
    {
        $anagrama = new Anagrama();

        $resultado = $anagrama->geraAnagrama('biro');

        $this->assertEquals('biro', $resultado[0]);
    }

    public function testNumeroDeAnagramas() {
        $anagrama = new Anagrama();
        
        $resultado = $anagrama->getTotalDeAnagramas('biro');
        
        $this->assertEquals(24, $resultado);
    }

    public function testAnagramasPossiveis() {
        $anagrama = new Anagrama();

        $resultado = $anagrama->geraAnagrama("luli");

        $this->assertContains("ola", $resultado);
        $this->assertContains("oal", $resultado);
        $this->assertContains("lao", $resultado);
        $this->assertContains("loa", $resultado);
        $this->assertContains("alo", $resultado);
        $this->assertContains("aol", $resultado);
    }
}