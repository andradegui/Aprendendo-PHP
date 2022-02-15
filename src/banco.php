<?php

require 'src/Conta.php';
require 'src/Endereco.php';
require 'src/Titular.php';
require 'src/Cpf.php';



$endereco = new Endereco('São Paulo', 'Interlagos', 'Rua Itapuí', '93');
$gui = new Titular(new Cpf('512.607.548-98'), 'Guilherme', $endereco);
$primeiraConta = new Conta($gui);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); 

echo $primeiraConta->recuperaNomeTitular() . "\n";
echo $primeiraConta->recuperaCpfTitular() . "\n";
echo $primeiraConta->mostraSaldo() . "\n";


