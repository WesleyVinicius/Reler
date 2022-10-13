<?php

namespace Reler\Modelo;

class Livro
{
    private string $titulo;
    private string $autor;
    private string $editora;
    private string $estadoConservacao;
    private float $precoCompra;
    private float $precoVenda;
    private Genero $genero;

    public function __construct(string $titulo, string $autor, string $editora, string $estadoConservacao, float $precoCompra, float $precoVenda, Genero $genero)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->estadoConservacao = $estadoConservacao;
        $this->precoCompra = $precoCompra;
        $this->precoVenda = $precoVenda;
        $this->genero = $genero;
    }

    public function recuperarTitulo(): string
    {
        return $this->titulo;
    }

    public function alterarTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function recuperarAutor(): string
    {
        return $this->autor;
    }

    public function alterarAutor(string $autor): void
    {
        $this->autor = $autor;
    }

    public function recuperarEditora(): string
    {
        return $this->editora;
    }

    public function alterarEditora(string $editora): void
    {
        $this->editora = $editora;
    }

    public function recuperarEstadoConservacao(): string
    {
        return $this->estadoConservacao;
    }

    public function alterarEstadoConservacao(string $estadoConservacao): void
    {
        $this->estadoConservacao = $estadoConservacao;
    }

    public function recuperarPrecoCompra(): float
    {
        return $this->precoCompra;
    }

    public function alterarPrecoCompra(float $precoCompra): void
    {
        $this->precoCompra = $precoCompra;
    }

    public function recuperarPrecoVenda(): float
    {
        return $this->precoVenda;
    }

    public function alterarPrecoVenda(float $precoVenda): void
    {
        $this->precoVenda = $precoVenda;
    }

    public function recuperarGenero(): string
    {
        return $this->genero->recuperarGenero();
    }

    public function alterarGenero(string $genero): void
    {
        $this->genero->alterarGenero($genero);
    }
    
}