<?php

function peso ($sexo,$altura) {
    if ($sexo == 1) {
        $pesoideal = (62.1 * $altura) - 44.7;
        return $pesoideal;
    }
    
    if ($sexo == 2) {
        $pesoideal = (72.7 * $altura) - 58;
        return $pesoideal;
    }
}
print "Informe seu sexo (1-Feminino e 2-Masculino) ";
$sexo = (int)fgets(STDIN);

print "Informe sua altura: ";
$altura = (float)fgets(STDIN);

$pesoideal = peso($sexo,$altura);
print "O seu peso ideal é: $pesoideal kg";
