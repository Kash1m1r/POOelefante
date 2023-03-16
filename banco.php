<?php
//abstração, encapsulamento, Herança, Polimorfismo
require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, Conta};
use Alura\Banco\Modelo\{Endereco, CPF};


$endereco = new Endereco('São Luis', 'Cutim Anil', 'ec', '24');
$gabriel = new Titular(new CPF('123.456.789-10'), 'Gabriel Pereira', $endereco);
$primeiraConta = new ContaPoupanca($gabriel);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$leo = new Titular(new CPF('698.549.548-10'), 'leonardo', $endereco);
$segundaConta = new ContaPoupanca($leo);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new ContaPoupanca(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
