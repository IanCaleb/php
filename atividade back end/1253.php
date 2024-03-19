<?php
// Função para decodificar a mensagem
function decodificar($mensagem, $deslocamento) {
    $decodificada = '';
    $tamanho = strlen($mensagem);
    // Loop para cada caractere na mensagem
    for ($i = 0; $i < $tamanho; $i++) {
        $caractere = $mensagem[$i];
        // Verifica se o caractere é uma letra maiúscula
        if (ctype_upper($caractere)) {
            // Aplica o deslocamento para trás no alfabeto
            $caractere_decod = chr(((ord($caractere) - ord('A') - $deslocamento + 26) % 26) + ord('A'));
            $decodificada .= $caractere_decod;
        } else {
            // Se não for letra, mantém o caractere original
            $decodificada .= $caractere;
        }
    }
    return $decodificada;
}

// Lendo o número de casos de teste
$n = intval(readline());

// Processando cada caso de teste
for ($i = 0; $i < $n; $i++) {
    // Lendo a mensagem codificada e o deslocamento
    $mensagem_codificada = readline();
    $deslocamento = intval(readline());

    // Decodificando a mensagem e imprimindo
    echo decodificar($mensagem_codificada, $deslocamento) . PHP_EOL;
}
?>