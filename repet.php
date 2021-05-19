<?php

echo PHP_EOL;

for ($i=1; $i <= 15; $i++) { 
    if ($i == 13) {                 // quando chegar no nª 13, vai pular SEM RODAR o Echo. 
        continue;
    }
    if ($i == 14) {
        break;
    }
    echo "# $i" . PHP_EOL;
}

echo PHP_EOL;
