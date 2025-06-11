<?php

namespace App\Model\Academico;




class Advertencia {
    private Aluno $aluno;
    private string $motivo;
    private \DateTime $data;

    public function __construct(Aluno $aluno, string $motivo) {
        $this->aluno = $aluno;
        $this->motivo = $motivo;
        $this->data = new \DateTime();
    }


}
