<?php

function dia ($dia) {
    switch ($dia){
        case 1:
            print "DOM" . "\n";
            break;
        case 2:
            print "SEG" . "\n";
            break;
        case 3:
            print "TER" . "\n";
            break;
        case 4:
            print "QUA" . "\n";
            break;
        case 5:
            print "QUI" . "\n";
            break;
        case 6:
            print "SEX" . "\n";
            break;
        case 7:
            print "SAB" . "\n";
            break;
        default;
            print "\n Digite um número válido (1 a 7)";
    }
}
print "Digite um número: ";
$dia = (int)fgets(STDIN);
print dia ($dia);
