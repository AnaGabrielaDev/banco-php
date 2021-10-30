<?php

class Conta
{
    private string $Titular;
    private float $saldo = 0;

    private static $quantidadeContas = 0;

    public function __construct(Titular $titular)
    {
        $this -> titular = $titular;
        
        self :: $quantidadeContas++;
    }

    public function __destruct(){
        self :: $quantidadeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo () : float 
    {
        return $this -> saldo;
    }

    public function recuperarNomeTitular () : string 
    {
        return $this -> titular -> getNome();
    }

    public function recuperarCpfTitular () : string 
    {
        return $this -> titular -> getCpf();
    }
    public static function recuperaQuantidadeConta () : int
    {
        return self :: $quantidadeContas;
    }
}
 