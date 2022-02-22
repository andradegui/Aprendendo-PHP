<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
{
    
    private $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {

        parent::__construct($nome, $cpf);        
        $this->salario = $salario;
    }

    public function recuperaCargo()
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome)
    {

        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario()
    {
        return $this->salario;
    }

    public function recebeAumento(float $vlAumento): void {
        
        if($vlAumento < 0) {

        }
    }

    abstract public function calculaBonificacao(): float;
}
