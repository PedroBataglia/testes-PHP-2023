<?php

function reverseWord($palavra)
{
    $palavraSeparada = str_split($palavra);
    $palavraReversa = array_reverse($palavraSeparada);
    $palavraNova = implode(",", $palavraReversa);
    $palavraNova = str_replace(",", "", $palavraNova);
    return $palavraNova;
}

 function reverseWords($palavras)
 {
    $palavraSeparadas = explode(" ", $palavras);
    $palavraReversas = array_reverse($palavraSeparadas);
    $palavraNovas = implode(" ", $palavraReversas);
    return $palavraNovas;
}

print_r(reverseWords("pizza Nova"));
print_r(reverseWord("palavra"));
