<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Gerente(
    'Guilherme',
    new Cpf('512.607.548-98'),
    1000
);


$autenticador->tentaLogin($umDiretor, '4321');