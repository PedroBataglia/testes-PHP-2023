<?php

function isPalindrome($sentence)
{
    $sentence = str_replace(" ", "", $sentence);
    $sentence = strtolower($sentence);
    $palindrome = strrev($sentence);
    if ($palindrome == $sentence) {
        return TRUE;
    } else {
        return FALSE;
    }
}

$palindrome = isPalindrome("subi no onibus");
var_dump($palindrome);
