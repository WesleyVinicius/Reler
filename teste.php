<?php

use Reler\Modelo\Desconto;
use Reler\Modelo\Funcionario\Gerente;
use Reler\Modelo\Genero;
use Reler\Modelo\Livro;

require_once 'src/Modelo/Desconto.php';
require_once 'src/Modelo/Genero.php';
require_once 'src/Modelo/Funcionario/Funcionario.php';
require_once 'src/Modelo/Funcionario/Gerente.php';
require_once 'src/Modelo/Livro.php';



$desconto = new Desconto(0.10, 50.00);
echo $desconto->recuperarPorcentagemDesconto() . PHP_EOL;
echo $desconto->recuperarValorMinimoCompras() . PHP_EOL;
$desconto->alterarPorcentagemDesconto(0.07) ;
echo $desconto->recuperarPorcentagemDesconto() . PHP_EOL;
$desconto->alterarValorMinimoCompras(20.00);
echo $desconto->recuperarValorMinimoCompras() . PHP_EOL;

$genero = new Genero('Literatura Brasileira');
echo $genero->recuperarGenero() . PHP_EOL;
$genero->alterarGenero('Literatura Inglesa');
echo $genero->recuperarGenero() . PHP_EOL;

$gerente = new Gerente('wesley@gmail.com', '123456', '123.456.789-10');
echo $gerente->recuperarEmail() . PHP_EOL;
echo $gerente->recuperarSenha() . PHP_EOL;
echo $gerente->recuperarCpf() . PHP_EOL;
$gerente->alterarEmail('wesleyvinicius@gmail.com');
echo $gerente->recuperarEmail() . PHP_EOL;

$livro = new Livro('Tieta do Agreste', 'Jorge Amado', 'Moderna', 'Semi-novo', 20.00, 30.00, new Genero('Literatura Brasileira'));
echo $livro->recuperarTitulo() . PHP_EOL;
echo $livro->recuperarAutor() . PHP_EOL;
echo $livro->recuperarEditora() . PHP_EOL;
echo $livro->recuperarEstadoConservacao() . PHP_EOL;
echo $livro->recuperarPrecoCompra() . PHP_EOL;
echo $livro->recuperarPrecoVenda() . PHP_EOL;
echo $livro->recuperarGenero() . PHP_EOL;
$livro->alterarGenero('Literatura');
echo $livro->recuperarGenero();

var_dump($livro);