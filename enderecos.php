<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco('blabalbl', 'aaad', 'rua12', 123);

echo $endereco1->rua .PHP_EOL;
echo $endereco1;


