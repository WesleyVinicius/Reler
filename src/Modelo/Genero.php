<?php

namespace Reler\Modelo;

class Genero
{
    private string $nomeGenero;

    public function __construct(string $nomeGenero)
    {
        $this->nomeGenero = $nomeGenero;
    }

    public function recuperarGenero(): string
    {
        return $this->nomeGenero;
    }

    public function alterarGenero(string $nomeGenero)
    {
        $this->nomeGenero = $nomeGenero;
    }
}