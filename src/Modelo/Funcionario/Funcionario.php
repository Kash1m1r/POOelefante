<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa {

    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario){
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome):void{
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
    public function recuperaSalario():float{
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento){
        if($valorAumento < 0){
            echo 'O aumento deve ser um valor maior que 0';
            return;
        }
        $this->salario += $valorAumento;
    }
    abstract public function calculaBonificacao():float;
}