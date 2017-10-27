<?php

namespace Hostnet;

class Anagrama
{
    private $anagramas = [];

    public function geraAnagrama(string $palavra): array 
    {
        $arrayLetras = str_split($palavra);
               
        $ItPossibilidades = $this->getTotalDeAnagramas($palavra);
        
        array_push($this->anagramas, $palavra);
        
        while(count($this->anagramas) != $ItPossibilidades){
            shuffle($arrayLetras);
            $anagramasTest = join('', $arrayLetras);
            if(!in_array($anagramasTest, $this->anagramas)){ 
                array_push($this->anagramas, $anagramasTest);
            }
        }

        return $this->anagramas;   
    }

    public function getTotalDeAnagramas(string $palavra)
    {
        $total = 1;    
        for ($i = 1; $i <= strlen($palavra); $i++){
            $total = $total * $i;
        }

        return $total;
    }
}