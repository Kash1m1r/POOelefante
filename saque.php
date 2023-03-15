<?php


use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.141.222-01'), 'Gabriel', 
        new Endereco('São luis', 'Cutim Anil', 'rua dos anjos', '102')
    ),2);


$conta->deposita(1000);
$conta->transfere(100);
$conta->saca(200);

var_dump($conta);

echo $conta->recuperaSaldo();