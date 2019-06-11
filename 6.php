<?php

function contar ($n1,$n2) {
    $soma = 0;
    for ($i=$n1; $i <=$n2 ; $i++) { 
        $soma = $soma + $i;
    }
return $soma;
}

print "Digite um número: ";
$n1 = (int)fgets(STDIN);

print "Digite outro número: ";
$n2 = (int)fgets(STDIN);

$soma = contar ($n1,$n2);
print "A soma do intervalo desses dois números é igual a: $soma ";
