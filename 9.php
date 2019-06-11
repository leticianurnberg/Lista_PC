<?php

function divisivel ($x,$y) {
        $modulo = $x%$y;
        if ($modulo == 0) {
            return "1 \n";
        }
        else {
            return "0 \n";
        }
}

print "Digite um número: ";
$x = (int)fgets(STDIN);

print "Digite outro número: ";
$y = (int)fgets(STDIN);


print divisivel ($x,$y);
