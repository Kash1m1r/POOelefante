<?php
//Abstração, Encapsulamento, Herança, Polimorfismo

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular, Conta};
use Alura\Banco\Modelo\{Endereco, CPF};

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