<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$ana = new Conta(new Titular(cpf: '123.345.643-87', nome: 'ana gaby'));
var_dump($ana);
$ana -> depositar(valorADepositar: 500);
$ana -> sacar(valorASacar: 400);

echo "Conta da " . $ana -> recuperarNomeTitular() . " cujo CPF: " .$ana -> recuperarCpfTitular() . " \nPossui um saldo de: R$"  . $ana -> recuperarSaldo();

$xuxuzinha = new Conta(new Titular(cpf: '123.456.765-98', nome: 'Xuxuzinha da silva'));
unset($xuxuzinha);
echo "\nQtd Contas Criadas: " . Conta :: recuperaQuantidadeConta();