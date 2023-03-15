<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF, Funcionario};
use Alura\Banco\Service\ControladorDeBonificacao;

$funcionario1 = new Funcionario(
    'Gabriel',
    new CPF('057.623.783-30'), 
    'Programador', 
    3000);

$funcionario2 = new Funcionario(
        'Joao Mateus',
        new CPF('123.222.333-30'), 
        'Programador', 
        4000);

$controlador = new ControladorDeBonificacao();
$controlador->adcionaBonificacao($funcionario1);
$controlador->adcionaBonificacao($funcionario2);

echo $controlador->recuperaBonificacao();