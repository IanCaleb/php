<?php
// Lendo o valor inteiro
$valor = intval(fgets(STDIN));

// Array com os valores das notas disponíveis
$notas = [100, 50, 20, 10, 5, 2, 1];

echo $valor . "\n"; // Imprime o valor lido

// Loop para calcular a quantidade de cada nota necessária
foreach ($notas as $nota) {
    $quantidade_notas = intval($valor / $nota); // Calcula a quantidade de notas necessárias
    echo $quantidade_notas . " nota(s) de R$ " . $nota . ",00\n"; // Imprime a quantidade de notas
    $valor %= $nota; // Atualiza o valor para o restante
}
?>