<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    //definir dados da conta

    private $titular;
    protected $saldo;
    private static $nContas = 0;
   

    /**
     * tipo 1 = Conta Corrente
     * tipo 2 = Poupança
     */
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$nContas++;
       
    }

    public function __destruct()
    {
        return self::$nContas--;
    }

    public function sacar(float $valorASaque)
    {
        $tarifaSaque = $valorASaque * $this->percentualTarifa();

        $valorSaque = $valorASaque + $tarifaSaque;

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

    public function mostraSaldo(): float
    {
        return $this->saldo;
    }

    public static function mostraContas(): int
    {
        return self::$nContas;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    abstract protected function percentualTarifa(): float;

}
