<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Conta\Conta;

class Desenvolvedor extends Funcionario{
    public function calculaBonificacao():float{
        return $this->recuperaSalario() * 0.05;
    }
}