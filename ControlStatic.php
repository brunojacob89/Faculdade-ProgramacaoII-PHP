<?php
include ('classes/Exemplostatic.php');

echo "<br> Voltagem: ".Exemplostatic::$voltagem;

$voltagem = new ExemploStatic();

echo "<br>Voltagem2: ".$voltagem -> valorVoltagem();

?>