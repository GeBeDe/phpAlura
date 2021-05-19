<?php

$espacador = " - ";

$valorSaque = '500';

$valorDeposito = 7;

function exibeMensagem(string $mensagem) {
    echo $mensagem . '<br>';
}

function sacar( array $conta, float $valorSaque,): array {
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem($conta['nome'] . " - " . "Vc ñ pode sacar " . $valorSaque . " reais.");
    }else {
        $conta['saldo'] -= $valorSaque;
        // exibeMensagem($conta['nome'] . " - " . "Vc retirou da sua conta " . $valorSaque . " reais.");
    }
    return $conta;
}

function depositar( array $conta, float $valorDeposito,): array {
    if ($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;
        // exibeMensagem($conta['nome'] . " - " . "Vc depositou da sua conta " . $valorDeposito . " reais.");
    } else {
        exibeMensagem($conta['nome'] . " - " . "Depósitos precisam ser positivos!");
    }
    return $conta;
}

function titularCaps(array &$conta) {       // colocar o Gabriel em UPPERCASE.
    $conta['nome'] = strtoupper($conta['nome']);
}

function exibeConta(array $conta) {
    ['nome' => $nome, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $conta[nome] . Saldo: $conta[saldo]";
}