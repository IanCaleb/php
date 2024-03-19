<?php
// Lendo os valores de X e Y
list($x, $y) = explode(" ", readline());

// Inicializando a variável de soma
$soma_impares = 0;

// Loop entre X e Y para encontrar os números ímpares e somá-los
for ($i = min($x, $y) + 1; $i < max($x, $y); $i++) {
    if ($i % 2 != 0) {
        $soma_impares += $i;
    }
}

// Imprimindo a soma dos números ímpares
echo $soma_impares . "\n";
?>