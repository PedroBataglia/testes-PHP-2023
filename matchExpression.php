<?php

 $food = "apple";

 $returnValue = match ($food) {
     'apple' => 'This food is an apple',
     'cake' => 'This food is a cake',
     'bar' => 'This food is a bar'
 };

 var_dump($returnValue);
