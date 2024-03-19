<?php
// Lendo os valores de X e Y
list($x, $y) = explode(" ", readline());

// Verificando qual valor é o menor e qual é o maior
if ($x < $y) {
    $menor = $x;
    $maior = $y;
} else {
    $menor = $y;
    $maior = $x;
}

// Loop para imprimir os valores entre X e Y cujo resto da divisão por 5 é igual a 2 ou 3
for ($i = $menor + 1; $i < $maior; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i . "\n";
    }
}
?>