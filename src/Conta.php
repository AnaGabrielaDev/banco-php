<?php

class Conta
{
    private string $Titular;
    private float $saldo = 0;

<<<<<<< HEAD
    private static $quantidadeContas = 0;

    public function __construct(Titular $titular)
    {
        $this -> titular = $titular;
        
        self :: $quantidadeContas++;
    }

    public function __destruct(){
        self :: $quantidadeContas--;
    }

=======
>>>>>>> parent of 3ff625c (🔨 Refactor)
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

<<<<<<< HEAD
    public function recuperarNomeTitular () : string 
=======
    public function definirCpfTitular (string $cpf) : void
    {
        $this -> cpfTitular = $cpf;
    }

    public function recuperarCpfTitular (): string 
>>>>>>> parent of 3ff625c (🔨 Refactor)
    {
        return $this -> titular -> getNome();
    }

<<<<<<< HEAD
    public function recuperarCpfTitular () : string 
    {
        return $this -> titular -> getCpf();
    }
    public static function recuperaQuantidadeConta () : int
=======
    public function definirNomeTitular (string $nome) : void
    {
        $this -> nomeTitular = $nome;
    }

    public function recuperarNomeTitular (): string 
>>>>>>> parent of 3ff625c (🔨 Refactor)
    {
        return self :: $quantidadeContas;
    }
}
 