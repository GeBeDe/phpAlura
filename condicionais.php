<?php

$idade = 15;
$pessoas = 2;

echo "Você só póde entrar se tiver mais do que 18 anos ou se tiver mais de 16 e estiver acompanhado." . PHP_EOL;

echo "Você tem $idade anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Pode entrar sozinho.";
} elseif ($idade >= 16 && $pessoas >1) {
    echo "Entre 16-18 e acompanhado, pode entrar.";
} else {
    echo "Nâo pode entrar.";   
}