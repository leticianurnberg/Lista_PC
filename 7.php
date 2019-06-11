<?php

function mes ($mes) {
    switch ($mes){
        case 1:
            print "Janeiro" . "\n";
            break;
        case 2:
            print "Fevereiro" . "\n";
            break;
        case 3:
            print "Março" . "\n";
            break;
        case 4:
            print "Abril" . "\n";
            break;
        case 5:
            print "Maio" . "\n";
            break;
        case 6:
            print "Junho" . "\n";
            break;
        case 7:
            print "Julho" . "\n";
            break;
        case 8:
            print "Agosto" . "\n";
            break;
        case 9:
            print "Setembro" . "\n";
            break;
        case 10:
            print "Outubro" . "\n";
            break;
        case 11:
            print "Novembro" . "\n";
            break;
        case 12:
            print "Dezembro" . "\n";
            break;
        default;
            print "\n Digite um número válido (1 a 12)";
    }
}
print "Digite um número: ";
$mes = (int)fgets(STDIN);
print mes ($mes);
