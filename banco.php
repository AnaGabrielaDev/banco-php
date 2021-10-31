<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$ana = new Titular(new CPF('123.456.709-10'), 'Ana Gabriela');
$primeiraConta = new Conta($ana);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

echo "Titular: ". $primeiraConta->recuperaNomeTitular() . " cujo cpf: ". $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo "saldo: ". $primeiraConta->recuperaSaldo(). " R$". PHP_EOL;

$xuxuzinha = new Titular(new CPF('698.549.548-14'), 'xuxuzinha de mel');
$segundaConta = new Conta($xuxuzinha);

$rosalinda = new Titular(new CPF('234.456.765-80'), 'rosalinda bezerra');
$terceiraConta = new Conta($rosalinda);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg'));

unset($segundaConta);
echo "o banco possui atualmente ". Conta::recuperaNumeroDeContas(). " contas.";
