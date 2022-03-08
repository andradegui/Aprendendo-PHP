<?php declare(strict_types=1);// faz diferenciação entre tipos strings e int 

namespace Alura;

class ArrayUtils{
                                                       // & = passar por referência                        
    public static function remover(int $elemento,array &$array){
                                            // true irá comparar o conteúdo e o tipo de cada elemento do array 
        $posicao = array_search($elemento, $array, true);

        //is_int verifica se o indice é um nº, caso sim ele retorna true
        if(is_int($posicao)){
            unset($array[$posicao]);
        }else{
            echo "Não foi possível achar esse indice";
        }
        
        
    }
}