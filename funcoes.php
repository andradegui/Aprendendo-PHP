<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . " <br> ";
};

function sacar($conta, $vlSaque)
{

    if ($vlSaque > $conta['saldo']) {
        exibeMensagem('Você não pode sacar este valor ' . $conta['titular']);
    } else {
        $conta['saldo'] -= $vlSaque;
    }

    return $conta;
}

function depositar($conta, float $vlDeposito)
{

    if ($vlDeposito > 0) {

        $conta['saldo'] += $vlDeposito;
        return $conta;

    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
};

//o & passa exatamente uma cópia do paramêtro da função
function letrasMaiusculas(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}
