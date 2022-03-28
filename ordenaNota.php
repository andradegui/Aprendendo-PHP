<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Guilhrme',
        'nota' => 0,
    ],
    [
        'aluno' => 'Rafael',
        'nota' => 6,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int{
    if($nota1['nota'] > $nota2['nota']){
        return -1;//-1 quer dizer q o 1º elemento vai vir antes que o 2º elemento
    }

    if($nota2['nota'] > $nota1['nota']){
        return 1;//1 quer dizer q o 2º elemento vai vir antes que o 1º elemento
    }

    return 0;//caso as notas forem iguais irá retornar 0
}


//primeiro paramêtro é um array e 
//a segunda é uma função que ensina a função a ordenar
usort($notas, 'ordenaNotas');   //é necessário passar por texto o nome da função q
                                //irá organizar o array
var_dump($notas);