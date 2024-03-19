<?php
// Função para ordenar os valores
function ordenarValores($valores) {
    $pares = [];
    $impares = [];

    // Separando os pares e os ímpares
    foreach ($valores as $valor) {
        if ($valor % 2 == 0) {
            $pares[] = $valor;
        } else {
            $impares[] = $valor;
        }
    }

    // Ordenando os pares em ordem crescente
    sort($pares);

    // Ordenando os ímpares em ordem decrescente
    rsort($impares);

    // Imprimindo os pares seguidos dos ímpares
    foreach ($pares as $par) {
        echo $par . PHP_EOL;
    }
    foreach ($impares as $impar) {
        echo $impar . PHP_EOL;
    }
}

// Lendo o número de valores
$n = intval(readline());

// Lendo e armazenando os valores
$valores = [];
for ($i = 0; $i < $n; $i++) {
    $valores[] = intval(readline());
}

// Ordenando e imprimindo os valores
ordenarValores($valores);
?>