<?php

require __DIR__ . '/vendor/autoload.php';

use App\Models\Comunicacao\Comunicador;

$comunicador = new Comunicador();

while (true) {
    echo "\n===== Sistema de Alertas =====\n";
    echo "1. Enviar alerta\n";
    echo "2. Listar alertas\n";
    echo "0. Sair\n";
    echo "Escolha: ";
    $opcao = trim(fgets(STDIN));

    if ($opcao == "1") {
        echo "Destinatário: ";
        $dest = trim(fgets(STDIN));
        echo "Mensagem: ";
        $msg = trim(fgets(STDIN));
        $comunicador->enviar($dest, $msg);
    } elseif ($opcao == "2") {
        $comunicador->listar();
    } elseif ($opcao == "0") {
        echo "Saindo...\n";
        exit;
    } else {
        echo "Opção inválida\n";
    }
}
