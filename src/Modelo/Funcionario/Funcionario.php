<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa {
    private $cargo;
    private $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario){
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo():string{
        return $this->cargo;
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
    public function calculaBonificacao():float{
        if($this->cargo === 'Gerente'){
            return $this->salario;
        }
        return $this->salario * 0.01;
    }
}
