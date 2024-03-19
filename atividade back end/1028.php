<?php
// Função para calcular o máximo divisor comum
function mdc($a, $b) {
    while ($b != 0) {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }
    return $a;
}

// Lendo o número de casos de teste
$casos_teste = intval(readline());

// Processando cada caso de teste
for ($i = 0; $i < $casos_teste; $i++) {
    // Lendo a quantidade de figurinhas de Ricardo e Vicente
    list($ricardo, $vicente) = explode(" ", readline());

    // Calculando o máximo divisor comum entre as quantidades de figurinhas
    $mdc_figurinhas = mdc($ricardo, $vicente);

    // Imprimindo o tamanho máximo da pilha que pode ser trocada
    echo $mdc_figurinhas . PHP_EOL;
}
?>