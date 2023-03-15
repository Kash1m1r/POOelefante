<?php
//Método abstrato faz com que o método seja obrigatório para que seja herdada


namespace Alura\Banco\Modelo\Conta;

abstract class Conta {
    private $titular;
    protected $saldo;
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

        $tarifaSaque = $valorASacar * $this->percentualTarifa();

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

    abstract protected function percentualTarifa():float;
    
}
