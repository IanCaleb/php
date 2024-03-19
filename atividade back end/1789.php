<?php
while (($l = readline()) !== false) {
    $velocidades = explode(' ', readline());
    $maior_velocidade = max($velocidades);

    if ($maior_velocidade < 10) {
        echo "1\n";
    } elseif ($maior_velocidade >= 10 && $maior_velocidade < 20) {
        echo "2\n";
    } else {
        echo "3\n";
    }
}
?>