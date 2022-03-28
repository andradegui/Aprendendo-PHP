<?php

$array = [
    1 => 'one',
    2 => 'two',
    3 => 'three',   
];


foreach ($array as $numeral => $nomeNumero){
    echo "$numeral em Inglês é: $nomeNumero" . "<br>";
} 

echo "Total " . count($array) . "\n";

echo "<hr/>";

$notas = [
    11,
    9,
    10,
    5,
    2
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "notas Ordenadas";
var_dump($notasOrdenadas);

echo "<hr/>";

