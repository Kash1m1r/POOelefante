<?php

namespace Alura\Banco\Modelo\Conta;

class Conta {
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;
    private $tipo;

    public function __construct(Titular $titular, int $tipo){
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;
        self::$numeroDeContas++;
    }

    public function __destruct(){
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar):void{

        if($this->tipo === 1){
            $tarifaSaque = $valorASacar * 0.05;
        }else{
            $tarifaSaque = $valorASacar * 0.02;
        }
        $valorDoSaque = $valorASacar + $tarifaSaque;
        if ($valorDoSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorDoSaque;
    }

    public function deposita(float $valorADepositar):void{
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino):void{
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo():float{
        return $this->saldo;
    }

    public function recuperaNomeTitular():string{
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular():string{
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas():int{
        return self::$numeroDeContas;
    }
}
