<?php

class Conta
{
    //definir dados da conta

    public $cpfTitular;
    public $nomeTitular;
    public $saldo = 0;

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
}
