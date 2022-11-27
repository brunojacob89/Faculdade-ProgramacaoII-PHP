<?php
require_once ('classes/pessoa.php');

//atribuindo valores para as variáveis
$nome = "Bruno Jacob";
$email = "brunojacob_89@email.com";
$telefone = "083 8876-5478";
$datanascimento = "08-12-1989";

//criar um novo objeto
$Pessoa1 = new Pessoa($nome, $email, $telefone, $datanascimento); //objeto1
//var_dump($Pessoa1); // mostra objeto que foi criado


echo "<div><strong>Dados Pessoas</strong>";
$Pessoa1 -> getPessoa();
echo "</div>";


?>