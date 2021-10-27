<?php

class Conta 
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

    public function sacar (float $valorASacar): void
    {
        if ($valorASacar > $this -> saldo){
            echo "Voce nao pode efetuar essa transacao";
            return;
        } 
            $this -> saldo -= $valorASacar;
    }

    public function depositar (float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "Nao eh possivel realizar essa operacao";
            return;
        }
            $this -> saldo += $valorADepositar;
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
}