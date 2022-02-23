<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('São Paulo', 'Interlagos', 'Rua Itapuí', '93');
$outroEndereco = new Endereco('São Paulo', 'Interlagos', 'Rua Itapuí', '92');



$umEndereco->bairro = "Ipiranga";
echo $umEndereco->bairro;
 
exit();
echo $umEndereco->bairro;
echo $umEndereco . "\n";
echo $outroEndereco . "\n";