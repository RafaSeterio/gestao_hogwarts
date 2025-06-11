<?php

namespace Models;

class Cronograma
{
    private string $diaSemana;
    private string $horario;
    private Turma $turma;
    private Disciplina $disciplina;

    public function __construct(string $diaSemana, string $horario, Turma $turma, Disciplina $disciplina)
    {
        $this->diaSemana = $diaSemana;
        $this->horario = $horario;
        $this->turma = $turma;
        $this->disciplina = $disciplina;
    }

    public function getDiaSemana(): string
    {
        return $this->diaSemana;
    }

    public function getHorario(): string
    {
        return $this->horario;
    }

    public function getTurma(): Turma
    {
        return $this->turma;
    }

    public function getDisciplina(): Disciplina
    {
        return $this->disciplina;
    }
}
