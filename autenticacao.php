<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticar = new Autenticador();
$diretor1 = new Gerente(
    'Gabriel',
    new CPF('123.123.423-01'),
    1223
);

$autenticar->tentaLogin($diretor1, '3131');