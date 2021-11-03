<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$ana = new Titular(new CPF('123.456.709-10'), 'Ana Gabriela', new Endereco(cidade: 'Fortaleza', estado:'CE', bairro: 'Messejana', rua: 'nao sei', numero: '873a'));
$primeiraConta = new Conta($ana);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

echo "Titular: ". $primeiraConta->recuperaNomeTitular() . " cujo cpf: ". $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo "saldo: ". $primeiraConta->recuperaSaldo(). " R$". PHP_EOL;

$xuxuzinha = new Titular(new CPF('698.549.548-14'), 'xuxuzinha de mel', new Endereco(cidade: 'Fortaleza', estado:'CE', bairro: 'Messejana', rua: 'nao sei', numero: '873a'));
$segundaConta = new Conta($xuxuzinha);

$rosalinda = new Titular(new CPF('234.456.765-80'), 'rosalinda bezerra', new Endereco (cidade: 'Sao paulo', estado: 'SP', bairro: 'localiza ai ', rua: 'haha', numero:'7834'));
$terceiraConta = new Conta($rosalinda);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', new Endereco (cidade: 'Sao paulo', estado: 'SP', bairro: 'localiza ai ', rua: 'haha', numero:'7834')));

unset($segundaConta);
echo "o banco possui atualmente ". Conta::recuperaNumeroDeContas(). " contas.";
