<?php

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/Cpf.php';

$gui = new Titular(new Cpf('512.607.548-98'), 'Guilherme');
$primeiraConta = new Conta($gui);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); 

echo $primeiraConta->recuperaNomeTitular() . "\n";
echo $primeiraConta->recuperaCpfTitular() . "\n";
echo $primeiraConta->mostraSaldo() . "\n";

