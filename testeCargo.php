<?php

require_once 'src/Funcionario/Funcionario.php';
require_once 'src/Funcionario/Gerente.php';

$gerente = new Gerente('wesley@email.com', '123456', '123.456.789-10', 'Gerente');

var_dump($gerente);