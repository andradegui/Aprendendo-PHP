<?php

require 'Calculadora.php';

$notas = [10, 4, 5.5];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if($media){
    echo "a média é: $media";
}
else{
    echo "não é possível calcular a média";
}

echo "<hr/>";

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach ($saldos as $saldo) {
    echo "<p>O saldo é: $saldo</p>";
}


sort($saldos);

echo "<p>O menor saldo é: $saldos[0]</p>";

echo "<hr/>";

$nomes = "Guilherme, Julia, Giovanna";

/*Função "explode" transforma lista de string em array*/
$arrayNomes = explode(", ", $nomes);

foreach ($arrayNomes as $nome) {
    echo "<p>Olá $nome</p>";
}

/*Função "implode" transforma lista de array em string*/
$nomesJuntos = implode(", ", $arrayNomes);
echo $nomesJuntos;

echo "<hr/>";

