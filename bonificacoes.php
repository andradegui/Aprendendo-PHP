<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\{ Gerente, Diretor, Desenvolvedor, EditorDeVideo};


$funcionario1 = new Gerente(
    'Guilherme', 
    new Cpf('512.607.548-98'),    
    1000
);

$funcionario2 = new Diretor(
    'Julia', 
    new Cpf('512.607.548-88'),    
    3000
);

$funcionario3 = new Desenvolvedor(
    'Julio', 
    new Cpf('512.607.548-48'),    
    3000
);

$funcionario4 = new EditorDeVideo(
    'Guigas', 
    new Cpf('512.607.548-18'),    
    3000
);

$funcionario4->nome = "Guidjermolly";
echo $funcionario4;

exit();
$controlador = new ControladorDeBonificacoes();
$controlador->addBonificacoes($funcionario4);
$controlador->addBonificacoes($funcionario1);
$controlador->addBonificacoes($funcionario2);
$controlador->addBonificacoes($funcionario3);
echo $controlador->recuperaTotal();