<?php

namespace App\Model\Aluno;


class Convite {
    private string $codigo;
    private bool $usado = false;

    public function __construct(string $codigo) {
        $this->codigo = $codigo;
    }

    public function marcarComoUsado() {
        $this->usado = true;
    }

    public function estaDisponivel(): bool {
        return !$this->usado;
    }
}
?>