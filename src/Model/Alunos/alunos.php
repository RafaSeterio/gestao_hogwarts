<?php

namespace App\Model\Alunos;

class Aluno
{
    private string $nome;
    private string $caracteristicas;
    private ?string $casa = null;

    public function __construct(string $nome, string $caracteristicas)
    {
        $this->nome = $nome;
        $this->caracteristicas = $caracteristicas;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCaracteristicas(): string
    {
        return $this->caracteristicas;
    }

    public function getCasa(): ?string
    {
        return $this->casa;
    }

    public function setCasa(string $casa): void
    {
        $this->casa = $casa;
    }
}
