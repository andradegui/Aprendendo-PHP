<?php

class Conta
{
    //definir dados da conta

    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;

    public function sacar(float $valorSaque)
    {

        if ($valorSaque > $this->saldo) {
            echo "Valor indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDepositado)
    {

        if ($valorDepositado < 0) {
            echo "Não é possível depositar esse valor";
            return;
        }

        $this->saldo += $valorDepositado;
    }

    public function transferir(float $valor, Conta $contaDestino ){

        if($valor > $this->saldo) {
            echo "Não é possível fazer essa transferência";
            return;
        }

        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }

    public function mostraSaldo(): float {

        return $this->saldo;
    }

    public function defineNome(string $nome): void {

        $this->nomeTitular = $nome;
    }    

    public function mostraNome(): string {
        return $this->nomeTitular;
    }

    public function defineCPF(string $cpf){

        $this->cpfTitular = $cpf;
    }

    public function mostraCPF(): string{

        return $this->cpfTitular;
    }
}
