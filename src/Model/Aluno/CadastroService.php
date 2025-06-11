<?php

namespace App\Model\Aluno;



class CadastroService {
    public function cadastrarAluno(Convite $convite, string $nome, int $idade, string $origem): ?Aluno {
        if (!$convite->estaDisponivel()) {
            echo "Convite já utilizado!\n";
            return null;
        }

        $aluno = new Aluno($nome, $idade, $origem);
        $convite->marcarComoUsado();
        return $aluno;
    }
}
?>