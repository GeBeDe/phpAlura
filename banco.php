<?php

require_once 'funcoes.php';

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

$contaCorrente['12345678911'] = sacar($contaCorrente['12345678911'], $valorSaque);
$contaCorrente['22345678912'] = sacar($contaCorrente['22345678912'], $valorSaque);

$contaCorrente['32345678913'] = depositar($contaCorrente['32345678913'], $valorDeposito);

// unset($contaCorrente['22345678912']);

titularCaps($contaCorrente['12345678911']);

/*
echo "<ul>";

foreach ($contaCorrente as $cpf => $conta) {
    exibeConta($conta);
}

echo "</ul>";
*/

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contaCorrente as $cpf => $conta) { ?>
            <dt>
                <h3>
                    <?= $conta['nome']; ?> - <?= $cpf; ?>
                </h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>
