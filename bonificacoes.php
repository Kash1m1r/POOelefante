<?php
//Abstração, Encapsulamento, Herança, Polimorfismos

require_once 'autoload.php';


use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, Editor};

$funcionario1 = new Desenvolvedor(
    'Gabriel',
    new CPF('057.623.783-30'), 
    1500);

$funcionario2 = new Gerente(
        'Joao Mateus',
        new CPF('123.222.333-30'),  
        4000);

$funcionario3 = new Diretor(
            'Josias Mateus',
            new CPF('112.222.333-30'), 
            4000);

$funcionario4 = new Editor(
    'Maria',
    new CPF('333.444.123-09'),
    1299
);

$controlador = new ControladorDeBonificacao();
$controlador->adcionaBonificacao($funcionario1);
$controlador->adcionaBonificacao($funcionario2);
$controlador->adcionaBonificacao($funcionario3);
$controlador->adcionaBonificacao($funcionario4);

var_dump($funcionario1). PHP_EOL;
var_dump($funcionario1). PHP_EOL;
var_dump($funcionario1). PHP_EOL;
echo $controlador->recuperaBonificacao();