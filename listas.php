<?php

$idadeList = [21, 22, 23, 24, 25, 26];

/* 
$idadeGabriel = $idadeList[0];
$idadeDiego = $idadeList[1];
$idadeHibra = $idadeList[2];
*/

list($idadeGabriel, $idadeDiego, $idadeHibra) = $idadeList;

echo count($idadeList) . PHP_EOL;


unset($idadeList[4]);

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

echo "$idadeGabriel $idadeDiego $idadeHibra" . PHP_EOL;

echo count($idadeList);

echo PHP_EOL;