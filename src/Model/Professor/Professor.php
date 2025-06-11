<?php

namespace Models;

class Professor extends Pessoa
{
    private array $disciplinas = [];
    private array $turmas = [];
    private array $cronograma = [];

    public function adicionarDisciplina(Disciplina $disciplina): void
    {
        $this->disciplinas[] = $disciplina;
    }

    public function adicionarTurma(Turma $turma): void
    {
        $this->turmas[] = $turma;
    }

    public function adicionarCronograma(Cronograma $cronograma): void
    {
        $this->cronograma[] = $cronograma;
    }

    public function getDisciplinas(): array
    {
        return $this->disciplinas;
    }

    public function getTurmas(): array
    {
        return $this->turmas;
    }

    public function getCronograma(): array
    {
        return $this->cronograma;
    }
}
