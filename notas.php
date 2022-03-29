<?php

$notas = [
    'Guilherme' => null,
    'Ana' => 6,
    'Jose' => 10,
    'Duda' => 8,
];

// krsort($notas);
// var_dump($notas);

// $notas = 2;

// if(is_array($notas)){
//     echo "É um array";
// }

// var_dump(array_is_list($notas));

// var_dump(isset($notas['Jose']));

echo 'Alguém tirou 10?' . "\n";
var_dump(in_array(10, $notas, true));//true faz uma comparação mais restrita
                                    // verifica se realmente existe um inteiro

echo 'Quem tirou 10?' . "\n";
echo array_search(10, $notas);
