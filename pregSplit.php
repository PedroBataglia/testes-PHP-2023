<?php

$str = "Hypertext Language Programming";
$chars = preg_split('/ /', $str, PREG_SPLIT_OFFSET_CAPTURE);
print_r($chars);
