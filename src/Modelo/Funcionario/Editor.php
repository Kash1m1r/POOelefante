<?php
namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Editor extends Funcionario{
	public function calculaBonificacao():float{
        return $this->recuperaSalario();
	}
}