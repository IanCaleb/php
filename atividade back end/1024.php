<?php
// Função para criptografar a mensagem
function criptografar($mensagem) {
    $mensagem_cripto1 = '';
    // Primeira passada: deslocamento de 3 posições para a direita nas letras
    for ($i = 0; $i < strlen($mensagem); $i++) {
        $char = $mensagem[$i];
        // Verifica se o caractere é uma letra maiúscula
        if (ctype_upper($char)) {
            $mensagem_cripto1 .= chr(((ord($char) - ord('A') + 3) % 26) + ord('A'));
        }
        // Verifica se o caractere é uma letra minúscula
        elseif (ctype_lower($char)) {
            $mensagem_cripto1 .= chr(((ord($char) - ord('a') + 3) % 26) + ord('a'));
        }
        // Caso contrário, mantém o caractere original
        else {
            $mensagem_cripto1 .= $char;
        }
    }

    // Segunda passada: inverte a mensagem
    $mensagem_cripto2 = strrev($mensagem_cripto1);

    // Terceira passada: deslocamento de uma posição para a esquerda a partir da metade da mensagem
    $metade = strlen($mensagem_cripto2) / 2;
    $mensagem_cripto3 = '';
    for ($i = 0; $i < strlen($mensagem_cripto2); $i++) {
        $char = $mensagem_cripto2[$i];
        if ($i >= $metade) {
            $mensagem_cripto3 .= chr(ord($char) - 1);
        } else {
            $mensagem_cripto3 .= $char;
        }
    }

    return $mensagem_cripto3;
}

// Loop para processar cada caso de teste
while (($n = intval(readline())) !== 0) {
    // Processar cada linha do caso de teste
    for ($i = 0; $i < $n; $i++) {
        $linha = readline();
        echo criptografar($linha) . PHP_EOL;
    }
}
?>