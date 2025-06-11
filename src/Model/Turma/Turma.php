<?php

namespace Models;

class Turma
{
    private int $id;
    private string $nome;
    private string $ano;

    public function __construct(int $id, string $nome, string $ano)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->ano = $ano;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getAno(): string
    {
        return $this->ano;
    }
}
