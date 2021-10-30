<?php 

class Titular 
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this -> cpf = $cpf;
        $this -> validaNomeTitular($nome);
        $this -> nome = $nome;        
    }

    public function getCpf(): string 
    {
        return $this -> cpf;
    }

    public function getNome(): string
    {
        return $this -> nome;
    }

    private function validaNomeTitular (string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome invalido, por favor preencha pelo menos 5 caracteres";
            exit();
        }
    }
}