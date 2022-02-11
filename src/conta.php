<?php

class Conta
{
    //definir dados da conta

    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
    private static $nContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular) {
       $this->cpfTitular = $cpfTitular;           
       $this->nomeTitular = $nomeTitular;
       $this->validaNome($nomeTitular);
       $this->saldo = 0; 
       self::$nContas++;
    }

    public function __destruct()
    {
        return self::$nContas--;
    }

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

    public function mostraNome(): string {
        return $this->nomeTitular;
    }    

    public function mostraCPF(): string{

        return $this->cpfTitular;
    }

    private function validaNome(string $nome) {
        if(strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public static function mostraContas(): int{
        return self::$nContas;
    } 
        
    

}
