<?php

namespace App\Model\Relatorios;

use App\Model\Alunos\Aluno;

class DistribuicaoDeCasas
{
    /**
     * @param Aluno[] $alunos
     */
    public static function gerar(array $alunos): array
    {
        $distribuicao = [];

        foreach ($alunos as $aluno) {
            $casa = $aluno->getCasa();
            if ($casa) {
                if (!isset($distribuicao[$casa])) {
                    $distribuicao[$casa] = 0;
                }
                $distribuicao[$casa]++;
            }
        }

        return $distribuicao;
    }
}
