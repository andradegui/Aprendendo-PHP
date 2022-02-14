<?php

class Titular{

    private $cpf;
    private $nome;

    public function __construct(Cpf $cpf, string $nome){
        
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNome($nome);
    }    

    public function recuperaCpf(): string {
        return $this->cpf->mostraNumero();
    }

    public function recuperaNome(): string {
        return $this->nome;
    }

    private function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
