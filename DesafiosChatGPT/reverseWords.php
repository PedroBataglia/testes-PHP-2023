<?php

function reverseWord($palavra)
{
    return strrev($palavra);
}

 function reverseWords($palavras)
 {
    $palavraSeparadas = explode(" ", $palavras);
    $palavraReversas = array_reverse($palavraSeparadas);
    $palavraNovas = implode(" ", $palavraReversas);
    return $palavraNovas;
}

//print_r(reverseWords("pizza Nova"));
print_r(reverseWord("palavra"));
