<?php
require_once ('classes/pessoa.php');

//criar um novo objeto
$Pessoa1 = new Pessoa(); //objeto1

//atribuindo valores para as variáveis
$Pessoa1 -> nome = "Bruno Jacob";
$Pessoa1 -> email = "brunojacob_89@email.com";
$Pessoa1 -> telefone = "083 8876-5478";
$Pessoa1 -> datanascimento = "08-12-1989";

echo "<div><strong>Dados Pessoas</strong>";
$Pessoa1 -> getPessoa();
echo "</div>";

$Pessoa2 = new Pessoa(); //objeto2

$Pessoa2 -> nome = "Fulano";
$Pessoa2 -> email = "fulano@email.com";
$Pessoa2 -> telefone = "213232424";
$Pessoa2 -> datanascimento = "10-01-2011";

echo "<div><strong>Dados Pessoas</strong>";
$Pessoa2 -> getPessoa();
echo "</div>";

?>