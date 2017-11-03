<?php

namespace Hostnet;

class Intervalo
{
    /**
     * Retorna uma lista com números agrupados por proximidade
     *
     * @param int ...$numeros
     * @return array
     *
     * @author Henrique Rodrigues <henrique@hostnet.com.br>
     */
    public function processar(int ...$numeros): array
    {
        # Ordena os números em ordem crescente
        sort($numeros);

        # Inicia as variáveis de controle

        # Array onde estarão os números agrupados
        $numerosFormatados = [];

        # Primeiro índice onde serão incluídos os números
        $grupo = 0;

        # Variável para comparação para definir se será criado um novo grupo
        $numeroAnterior = null;

        # Percorre os números informados
        foreach ($numeros as $numero) {
            # Se o array estiver vazio, cria o primeiro grupo
            if (empty($numerosFormatados)) {
                $numerosFormatados[$grupo][] = $numero;
            # Senão, faz a rotina de comparação.
            } else {
                # Se não for o número imediatamente após o número anterior,
                # cria um novo grupo
                if ($numero !== $numeroAnterior+1) {
                    $grupo++;
                }

                # Adiciona o número no grupo atual
                $numerosFormatados[$grupo][] = $numero;
            }

            # Salva o número atual para a comparação no próximo ciclo
            $numeroAnterior = $numero;
        }

        # Retorna os números agrupados
        return $numerosFormatados;
    }
}
