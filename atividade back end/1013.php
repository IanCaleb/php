<?php

$a = 0;
$b = 1;
$c = 2;

// Encontrando o maior entre a e b
$maior_ab = ($a + $b + abs($a - $b)) / 2;

// Encontrando o maior entre o maior de a e b e c
$maior = ($maior_ab + $c + abs($maior_ab - $c)) / 2;

// Imprimindo o resultado
echo $maior . "eh o maior\n";
?>