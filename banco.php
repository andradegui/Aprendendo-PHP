<?php

require_once "autoload.php";

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;

$endereco = new Endereco('São Paulo', 'Interlagos', 'Rua Itapuí', '93');
$gui = new Titular(new Cpf('512.607.548-98'), 'Guilherme', $endereco);
$primeiraConta = new Conta($gui, 1);
$primeiraConta->depositar(500);
$primeiraConta->sacar(100); 

echo $primeiraConta->recuperaNomeTitular() . "\n";
echo $primeiraConta->recuperaCpfTitular() . "\n";
echo $primeiraConta->mostraSaldo() . "\n";


