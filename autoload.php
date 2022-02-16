<?php

spl_autoload_register(function(string $nomeCompletoClasse) {

    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoClasse);
    //isso faz com que mesmo no Linux, o PHP interprete da maneira correta o
    //separador de pastas \\
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo = '.\\'. $caminhoArquivo . '.php ';

    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});