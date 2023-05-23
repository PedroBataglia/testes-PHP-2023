<?php

 function reverseWords($palavra) {
    $palavraSeparada = str_split($palavra);
    $revertido = array_reverse($palavraSeparada);
    $palavraNova = implode(",", $revertido);
    $palavraNova = str_replace(",", "", $palavraNova);
    return $palavraNova;


    
}

print_r(reverseWords("pizza"));

