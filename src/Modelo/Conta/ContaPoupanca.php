<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

    protected function percentualTarifa(): float{
        return 0.03;
    }

    public function transferir(float $valor, Conta $contaDestino)
    {

        if ($valor > $this->saldo) {
            echo "Não é possível fazer essa transferência";
            return;
        }

        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }
}
