<?php

use Alura\Banco\Modelo\Conta\{Conta, ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

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