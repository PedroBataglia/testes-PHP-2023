<?php

function isPalindrome($sentence)
{
    $sentence = str_replace(" ", "", $sentence);
    $sentence = strtolower($sentence);
    $palindrome = reverseString($sentence);
    if ($palindrome == $sentence) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function reverseString($sentence)
{
    $reverseSentence = strrev($sentence);
    return $reverseSentence;
}

$palindrome = isPalindrome("subi no onibus");
var_dump($palindrome);
