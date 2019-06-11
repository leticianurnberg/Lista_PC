<?php

function FahrparaCel ($temp_f) {
    $temp_c = ($tf -32) * 5/9;
    return $temp_c;
}

print "Digite a temperatura em Fahrenheit: " ;
$temp_f = (float)fgets(STDIN);
$temp_c = FahrparaCel($temp_f);

print "$temp_f Fahrenheit são $temp_c ° Celsius \n \n";
