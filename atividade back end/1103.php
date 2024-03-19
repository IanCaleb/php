<?php
// Função para calcular o total de minutos
function calcularMinutos($h1, $m1, $h2, $m2) {
    $minutos_atual = $h1 * 60 + $m1; // Convertendo horas e minutos atuais para minutos
    $minutos_despertador = $h2 * 60 + $m2; // Convertendo horas e minutos do despertador para minutos

    // Se o despertador for programado para uma hora anterior à hora atual, somamos 24 horas em minutos (1440 minutos)
    if ($minutos_despertador <= $minutos_atual) {
        $minutos_despertador += 1440;
    }

    return $minutos_despertador - $minutos_atual; // Calculando a diferença de minutos
}

// Loop para ler os casos de teste
while (true) {
    // Lendo os valores de hora e minuto atuais e hora e minuto do despertador
    list($h1, $m1, $h2, $m2) = explode(" ", readline());

    // Verificando se é o fim da entrada
    if ($h1 == 0 && $m1 == 0 && $h2 == 0 && $m2 == 0) {
        break;
    }

    // Calculando e imprimindo o total de minutos para dormir
    echo calcularMinutos($h1, $m1, $h2, $m2) . "\n";
}
?>