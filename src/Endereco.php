<?php

class Endereco 
{
    private string $cidade;
    private string $estado;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $estado, string $bairro, string $rua, string $numero)
    {
        $this -> cidade = $cidade;
        $this -> estado = $estado;
        $this -> bairro = $bairro;
        $this -> rua = $rua;
        $this -> numero = $numero;
    }

    public function getCidade (string $cidade)
    {
        return $this -> cidade; 
    }

    public function getEstado (string $estado)
    {
        return $this -> estado;
    }

    public function getBairro (string $bairro)
    {
        return $this -> bairro;
    }

    public function getRua (string $rua)
    {
        return $this -> rua;
    }

    public function gerRua (string $rua)
    {
        return $this -> rua;
    }
}