<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\{ Gerente, Diretor, Desenvolvedor};


$funcionario1 = new Gerente(
    'Guilherme', 
    new Cpf('512.607.548-98'),
    'Desenvolvedor',
    1000
);

$funcionario2 = new Diretor(
    'Julia', 
    new Cpf('512.607.548-88'),
    'Desenvolvedor',
    3000
);

$funcionario3 = new Desenvolvedor(
    'Julio', 
    new Cpf('512.607.548-48'),
    'Desenvolvedor',
    3000
);


$controlador = new ControladorDeBonificacoes();
$controlador->addBonificacoes($funcionario1);
$controlador->addBonificacoes($funcionario2);
$controlador->addBonificacoes($funcionario3);


echo $controlador->recuperaTotal();