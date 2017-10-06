<?php

namespace Hostnet;

class Calculadora
{
    public function somar()
    {
        $values = func_get_args();
        foreach ($values as $value) {
            if (!is_numeric($value)) {
                return false;
            }
        }
        
        return array_sum($values);
    }
}
