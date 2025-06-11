<?php

namespace Models;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(int $id, string $nome, string $email, string $cargo)
    {
        parent::__construct($id, $nome, $email);
        $this->cargo = $cargo;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }
}
