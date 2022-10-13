<?php

namespace Reler\Modelo;

class Desconto
{
    private float $porcentagemDesconto;
    private float $valorMinimoCompras;

    public function __construct(float $porcentagemDesconto, float $valorMinimoCompras)
    {
        $this->porcentagemDesconto = $porcentagemDesconto;
        $this->valorMinimoCompras = $valorMinimoCompras;
    }

    public function recuperarPorcentagemDesconto(): float
    {
        return $this->porcentagemDesconto;
    }

    public function alterarPorcentagemDesconto(float $porcentagemDesconto): void
    {
        $this->porcentagemDesconto = $porcentagemDesconto;
    }

    public function recuperarValorMinimoCompras(): float
    {
        return $this->valorMinimoCompras;
    }

    public function alterarValorMinimoCompras(float $valorMinimoCompras): void
    {
        $this->valorMinimoCompras = $valorMinimoCompras;
    }
}