<?php

function isAPrimeNumber($numero) {
    $divisores = 0;
    for($count2 = 2; $count2 < $numero; $count2++) {
        if ($numero % $count2 == 0) {
            echo "Multiplo de $count2".PHP_EOL;
            $divisores++;
        }
    }
    if ($divisores > 0) {
        echo "Não é, tem $divisores divisores além de 1 e ele mesmo";
    } else {
        echo "Ele é primo";
        }
}


isAPrimeNumber(171);
