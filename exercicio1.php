<php

$tempo = readline("Digite o tempo: ");
$velo_med = readline("Digite a Velocidade Media: ");

$distancia = ($tempo * $velo_med);

$litros_us = ($distancia / 12);

echo "Velocidade Media: " . $velo_med . "\n";
echo "Tempo Gasto: " . $tempo . "\n";
echo "Distancia percorrida: " . $distancia . "\n";
echo "Quantidade litros: " . $litros_us . "\n";

?>