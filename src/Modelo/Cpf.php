<?php

namespace Alura\Banco\Modelo;

class Cpf
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
