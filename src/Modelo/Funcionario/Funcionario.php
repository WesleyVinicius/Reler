<?php

namespace Reler\Modelo\Funcionario;

abstract class Funcionario
{   
    private string $email;
    private string $senha;
    private string $cpf;

    public function __construct(string $email, string $senha, string $cpf)
    {
        $this->email = $email;
        $this->senha = $senha;
        $this->cpf = $cpf;
    }

    public function recuperarEmail(): string
    {
        return $this->email;
    }

    public function alterarEmail(string $email): void
    {
        $this->email = $email;
    }

    public function recuperarSenha(): string
    {
        return $this->senha;
    }

    public function alterarSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf;
    }

    public function alterarCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
}