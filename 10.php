<?php

function maior ($n1,$n2) {
    if ($n1 > $n2) {
        return "O maior número digitado é $n1 \n";
    }
    else {
        return "O maior número digitado é $n2 \n";
    }
}

print "Digite o primeiro número: ";
$n1 = (int)fgets(STDIN);

print "Digite o segundo número: ";
$n2 = (int)fgets(STDIN);

print maior ($n1,$n2);
