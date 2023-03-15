<?php
require_once 'autoload.php';


use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor};

$funcionario1 = new Funcionario(
    'Gabriel',
    new CPF('057.623.783-30'), 
    'Programador', 
    3000);

$funcionario2 = new Gerente(
        'Joao Mateus',
        new CPF('123.222.333-30'), 
        'Programador', 
        4000);

$funcionario3 = new Diretor(
            'Josias Mateus',
            new CPF('112.222.333-30'), 
            'Diretor', 
            4000);

$controlador = new ControladorDeBonificacao();
$controlador->adcionaBonificacao($funcionario1);
$controlador->adcionaBonificacao($funcionario2);
$controlador->adcionaBonificacao($funcionario3);

echo $controlador->recuperaBonificacao();