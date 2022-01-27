<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . " <br>";
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




$contasCorrentes = [
    123654 => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ],
    123745 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    416541 => [
        'titular' => 'Guilherme',
        'saldo' => 90000
    ]
];

$contasCorrentes[123654] = depositar($contasCorrentes[123654], 10.80);

$contasCorrentes[123745] = sacar($contasCorrentes[123745], 10);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}



/*for($i=0; $i<count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . "<br>";
}*/