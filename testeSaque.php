<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('512.607.548-98'),
        'Guilherme',
        new Endereco('São Paulo', 'Interlagos', 'Rua Itapuí', '93')        
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->mostraSaldo();