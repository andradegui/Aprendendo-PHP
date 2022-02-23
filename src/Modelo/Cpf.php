<?php

namespace Alura\Banco\Modelo;

//define q uma classe nao pode ser extendida
final class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->numero = $numero;
    }

    public function mostraNumero(): string
    {
        return $this->numero;
    }
}
