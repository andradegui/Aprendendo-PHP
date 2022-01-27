<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Guilherme',
    'saldo' => 90000
];

$contasCorrentes = [
    123654 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
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

$contasCorrentes[741848] = [
    
        'titular' => 'Julia',
        'saldo' => 90000
    
];



foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . '<br>';
}

/*for($i=0; $i<count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . "<br>";
}*/