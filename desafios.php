<?php

/*

-----Mostrar apenas os numeros impares de 1 a 100!-----

for ($i=1; $i <= 100; $i += 2) { 
    echo "# $i" . PHP_EOL;
}
*/

// --------------------------------------------------------------------------------------------------------------------------------

/*

-----Tabuada de numeros----- 

$mult = 3;

for ($i=1; $i <= 10; $i++) { 
    
    $resultado = $mult * $i;
    echo "$mult x $i = $resultado" . PHP_EOL;
}
*/

// --------------------------------------------------------------------------------------------------------------------------------

$peso = 60;
$altura = 1.65;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";