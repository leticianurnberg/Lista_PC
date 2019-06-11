<?php

function polTocm ($pol) {
    $centimetros = $pol * 2.54;
    return $centimetros;
}

print "Digite o valor em polegadas para ser convertido: ";
$pol = (float)fgets(STDIN);

print polTocm ($pol);
