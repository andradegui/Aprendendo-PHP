<?php declare(strict_types=1); // faz diferenciação entre tipos strings e int 

namespace Alura;

require 'autoload.php';

$notas = [10, 4, 5.5];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "a média é: $media";
} else {
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

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12",
];

echo "<pre>";

var_dump($correntistas_e_compras);

ArrayUtils::remover("Luis" , $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "</pre>";

echo "<hr/>";

$correntistas = [
    "Giovanni", 
    "João",
    "Luís",
    "Luisa",
    "Rafael"
];

$correntistasNaoPagantes = [
    'Luis',
    'Luisa',
    'Rafael',
];
        //faz a diferenciação do que está na array correntistas, sendo assim irá mostrar apenas os correntistas pagantes
$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

//tag pre formata o array no html
echo "<pre>";
var_dump($correntistasPagantes);
echo "<pre>";

echo "<hr>";

$correntistas2 = [
    "Giovanni", 
    "João",
    "Luís",
    "Maria",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

                //combina os indices de 2 vetores
$relacionados = array_combine($correntistas2, $saldos);

//echo $relacionados["Giovanni"];

$relacionados["Matheus"]=4000;

echo "<pre>";
var_dump($relacionados);
echo "</pre>";

echo "<hr>";

//função do php de array q verifica se o indíce existe no vetor
if(array_key_exists("Joao", $relacionados)){
    echo "O saldo do Joao é : {$relacionados["Joao"]}";
} else{
    echo "Não foi encontrado";
}

echo "<hr>";

//:: é uma maneira de chamar o método/função de um arquivo
$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(2000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "<pre>";
