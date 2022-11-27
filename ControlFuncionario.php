<?php
require_once ("classes/funcionario.php");

$Func = new Funcionario();
$Func -> setNome("Bruno Jacob");
$Func -> setEmail("aluno@email.com");
$Func -> setSalario(2000);

//var_dump($Func);

echo "<br> Nome: " .$Func -> nome;
echo "<br> Nome: " .$Func -> getEmail();
echo "<br> Nome: " .$Func -> getSalario();

?>