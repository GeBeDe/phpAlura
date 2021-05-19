<?php

$conta1 = [
    'nome' => 'Gabriel',
    'saldo' => '1000',
];

$conta2 = [
    'nome' => 'Diego',
    'saldo' => '2000', 
];

$conta3 = [
    'nome' => 'Hibra',
    'saldo' => '3000', 
];

$contaCorrente = [
    $conta1, $conta2, $conta3,
];

$contaCorrente[] = [
    'nome' => 'Valdir',
    'saldo' => '4000',
];

$contaCorrente[] = [
    'nome' => 'Ari',
    'saldo' => '5000',
];

for ($i=0; $i < count($contaCorrente); $i++) { 
    echo $contaCorrente[$i]['saldo'] . PHP_EOL;
}

$numero = count($contaCorrente);

echo "existem $numero contas ativas";