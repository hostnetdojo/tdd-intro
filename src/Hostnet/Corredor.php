<?php

namespace Hostnet;

class Corredor
{
    //array com booleanos representado estado de cada lampada
    private $lampadas;

    public function __construct(int $quantidade = 1)
    {
        for ($i = 1; $i <= $quantidade; $i++) {
            $this->lampadas[$i] = false;
        }
    }

    public function percorre(): array
    {
        foreach ($this->lampadas as $divisor => $lampada) {
            foreach ($this->lampadas as $dividendo => $estado) {
                if ($dividendo % $divisor == 0) {
                    $this->lampadas[$dividendo] = !$this->lampadas[$dividendo];
                }
            }
        }
        return $this->lampadas;
    }
}
