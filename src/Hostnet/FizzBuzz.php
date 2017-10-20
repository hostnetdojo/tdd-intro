<?php

namespace Hostnet;

class FizzBuzz
{
    public function geraLista()
    {
        $ArNumeros = [];

        for ($i=1; $i<=100; $i++) {
            $ArNumeros[$i] = $this->geraFizz($i);
            $gera = $this->geraBuzz($i);

            if ($gera == "Buzz" && $ArNumeros[$i] == "Fizz") {
                $ArNumeros[$i].=$gera;
            }
        }

        return $ArNumeros;
    }

    public function geraFizz($n)
    {
        return $n % 3 == 0 ? 'Fizz' : $n;
    }

    public function geraBuzz($n)
    {
        return $n % 5 == 0 ? 'Buzz' : $n;
    }
}
