<?php

require 'vendor/autoload.php';

use App\Model\Alunos\Aluno;
use App\Model\Chapeu\ChapeuSeletor;
use App\Model\Relatorios\DistribuicaoDeCasas;

$alunos = [
    new Aluno('Harry Potter', 'Corajoso, impulsivo'),
    new Aluno('Draco Malfoy', 'Ambicioso, esperto'),
    new Aluno('Luna Lovegood', 'Criativa, inteligente'),
    new Aluno('Cedrico Diggory', 'Leal, justo'),
];

$chapeu = new ChapeuSeletor();

foreach ($alunos as $aluno) {
    $chapeu->selecionarCasa($aluno);
    echo "{$aluno->getNome()} foi selecionado para a casa {$aluno->getCasa()}\n";
}

echo "\nDistribuição por casa:\n";
$distribuicao = DistribuicaoDeCasas::gerar($alunos);
print_r($distribuicao);
