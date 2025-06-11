<?php

namespace App\Model\Academico;




class RegistroAcademico {
    private Aluno $aluno;
    private Disciplina $disciplina;
    private float $nota;
    private int $faltas;

    public function __construct(Aluno $aluno, Disciplina $disciplina) {
        $this->aluno = $aluno;
        $this->disciplina = $disciplina;
    }

    public function registrarNota(float $nota) {
        $this->nota = $nota;
    }

    public function registrarFaltas(int $quantidade) {
        $this->faltas += $quantidade;
    }


}
?>