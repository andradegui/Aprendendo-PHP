<?php

$alunos2021 = [
    'Guilherme',
    'Rodrigo',    
    'André',    
];

$alunos2022 = [
    'Julia',
    'Emily'
];

// $turma2022 = array_merge($alunos2021, $alunos2022);
$turma2022 = [...$alunos2021, 'Teste', ...$alunos2022];


var_dump($turma2022);

