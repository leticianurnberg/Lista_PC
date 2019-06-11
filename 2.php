<?php

function hipotenusa ($catA,$catB) {
    $hipotenusa = sqrt($catA**2 + $catB**2);
    return $hipotenusa;
} 

print "Digite o primeiro cateto: ";
$catA = (float)fgets(STDIN);

print "Digite o segundo cateto: ";
$catB = (float)fgets(STDIN);

$hipotenusa = hipotenusa($catA,$catB);

print "O valor da hipotenusa é igual a: $hipotenusa ";
