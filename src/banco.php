<?php

require 'src/Conta.php';

$primeiraConta = new Conta('512.607.548-98', 'Guilherme');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); 

echo $primeiraConta->mostraNome() . "\n";
echo $primeiraConta->mostraCPF() . "\n";
echo $primeiraConta->mostraSaldo() . "\n";

$secundaConta = new Conta('512.607.548-00', 'Julia');
unset($secundaConta);

echo Conta::mostraContas();




