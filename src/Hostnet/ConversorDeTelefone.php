<?php

namespace Hostnet;

class ConversorDeTelefone
{

    # Tabela de conversão de caracteres para string
    const TABELA = [
        'A' => 2, 'B' => 2, 'C' => 2, 'D' => 3, 'E' => 3, 'F' => 3, 'G' => 4,
        'H' => 4, 'I' => 4, 'J' => 5, 'K' => 5, 'L' => 5, 'M' => 6, 'N' => 6,
        'O' => 6, 'P' => 7, 'Q' => 7, 'R' => 7, 'S' => 7, 'T' => 8, 'U' => 8,
        'V' => 8, 'W' => 9, 'X' => 9, 'Y' => 9, 'Z' => 9
    ];

    /**
     * Converte uma string para o número de telefone correspondente
     *
     * @param string $texto
     * @return string
     *
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function converte(string $texto): string
    {
        # Texto que será retornado
        $textoConvertido = '';

        # Executa o código para cada caractere até o fim da string
        for ($ItIndex=0; $ItIndex<strlen($texto); $ItIndex++) {
            # Se existir na tabela, converte. Se não existir, mantém.
            $textoConvertido .= isset(self::TABELA[$texto[$ItIndex]])
                ? self::TABELA[$texto[$ItIndex]]
                : $texto[$ItIndex];
        }

        # Retorna o texto convertido
        return $textoConvertido;
    }
}
