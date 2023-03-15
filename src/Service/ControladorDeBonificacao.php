<?php

namespace Alura\Banco\Service;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacao{
    private $totalBonificacao = 0;
    public function adcionaBonificacao(Funcionario $funcionario){
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }

    public function recuperaBonificacao():float{
        return $this->totalBonificacao;
    }
}