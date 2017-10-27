<?php

namespace Hostnet;

class Bissexto
{

    public function divisivelPor4($num)
    {
        return $num % 4 == 0;
    }

    public function naoDivisivelPor100($num)
    {
        return !($num % 100 == 0);
    }

    public function divisivelPor400($num)
    {
        return ($num % 400 == 0);
    }

    public function verificarBissexto($num)
    {
        $resultDivisvelPor4 = $this->divisivelPor4($num);
        $resultNaoDivisivelPor100 = $this->naoDivisivelPor100($num);
        $resultDivisivelPor400 = $this->divisivelPor400($num);

        // O ano for divisível por 4
        // mas não divisível por 100
        // exceto se ele for também divisível por 400.
        return  (
            $resultDivisvelPor4
            && ($resultNaoDivisivelPor100 || $resultDivisivelPor400)
        );
    }
}
