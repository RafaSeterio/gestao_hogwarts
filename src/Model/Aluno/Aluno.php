<?php

namespace App\Model\Aluno;

class Aluno {
    private string $nome;
    private int $idade;
    private string $origem;

    public function __construct(string $nome, int $idade, string $origem) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->origem = $origem;
    }


}
?>