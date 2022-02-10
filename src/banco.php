<?php

require 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); 
$primeiraConta->defineNome('Guilherme'); 
$primeiraConta->defineCPF('512-607-548.98'); 

echo $primeiraConta->mostraSaldo();
echo $primeiraConta->mostraNome();
echo $primeiraConta->mostraCPF();


