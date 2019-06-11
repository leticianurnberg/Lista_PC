<?php

function poligono ($lados,$tam) {
    if ($lados == 3) {
        $tipo = "Triangulo";
        $perimetro = $lados * $tam;
        return $poligono = [$perimetro,$tipo];
    }
    
    elseif ($lados == 4) {
        $tipo = "Quadrado";
        $area = $tam ** 2;
        return $poligono = [$area,$tipo];
    }
    
    elseif ($lados == 5) {
        $tipo = "Pentágono";
        return $tipo;
    }
}

print "Informe a quantidade de lados; ";
$lados = (int)fgets(STDIN);
if ($lados == 5) {
    $poligono = poligono ($lados, 0);
    print "$poligono ";
}
else {
    print "Informe a medida de um dos lados: ";
$tam = (float)fgets(STDIN);
$poligono = poligono ($lados,$tam);
print $poligono[0] . " centímetros. " . $poligono[1] . "\n";
}
