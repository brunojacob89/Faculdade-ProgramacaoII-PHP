<?php
require_once('classes/ContaCorrente.php');

$cliente1 = new ContaCorrente("3255-5","324567-9","bruno jacob",1000.50,5000.00);

$cliente1 -> depositar(500.25);
echo $resultado1 = $cliente1 -> exibirExtrato();
$cliente1 -> retirar(500.25);
echo $resultado2 = $cliente1 -> exibirExtrato();



?>