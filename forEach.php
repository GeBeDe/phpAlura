<?php

$contaCorrente = [
    12345678911 => [
        'nome' => 'Gabriel',
        'saldo' => '1000',
    ],
    22345678912 => [
        'nome' => 'Diego',
        'saldo' => '2000', 
    ],
    32345678913 => [
        'nome' => 'Hibra',
        'saldo' => '3000', 
    ],
];

foreach ($contaCorrente as $cpf => $conta) {
    echo $conta['saldo'] . PHP_EOL;
}

