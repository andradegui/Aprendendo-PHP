<?php

require_once 'funcoes.php';//para incluir o código de um arquivo

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

// faz com que um dado na array seja excluido
//unset ($contasCorrentes[123745]);

letrasMaiusculas($contasCorrentes['416541']);

/*/função list
foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");
}
*/

/*for($i=0; $i<count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . "<br>";
}*/

/*echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta){
    exibeConta($conta);
}
echo "</ul>";
*/
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <?php foreach ($contasCorrentes as $cpf => $conta) {?>
    <dl>
        <dt><h3> <?= $conta['titular']; ?> - <?= $cpf; ?></h3></dt>
        <dd> Saldo: <?= $conta['saldo']; ?></dd>
    </dl>
    <?php } ?>  

</body>
</html>
