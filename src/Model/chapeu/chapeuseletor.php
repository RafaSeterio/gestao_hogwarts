<?php

namespace App\Model\chapeu;

use App\Model\Alunos\Aluno;
use App\Model\Casas\Casa;

class chapeuseletor
{
    public function selecionarCasa(Aluno $aluno): void
    {
        $casas = Casa::todas();
        $casaEscolhida = $casas[array_rand($casas)];
        $aluno->setCasa($casaEscolhida);
    }
}
