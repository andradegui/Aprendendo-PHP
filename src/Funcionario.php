<?php

class Funcionario extends Pessoa{

    private $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo) {

        parent::__construct($nome, $cpf);        
        $this->cargo = $cargo;

    }
    
    public function recuperaCargo()
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome){

        $this->validaNome($nome);
        $this->nome = $nome;
    }

}