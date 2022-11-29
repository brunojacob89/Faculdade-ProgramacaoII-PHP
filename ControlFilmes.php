<?php
require_once ("classes/Ator.php");
require_once ("classes/Atua.php");
require_once ("classes/Filme.php");


$ator1 = new Ator("Bruno Jacob");
$ator2 = new Ator("Fulano de tal");

$filme1 = new Filme("Velozes Furiosos");

$atua = array();

$ator1Atua = new Atua();
$ator1Atua -> setAtua($filme1, $ator1, "Pai");
$atua[] = $ator1Atua;

$ator2Atua = new Atua();
$ator2Atua -> setAtua($filme1, $ator2, "Mãe");
$atua[] = $ator2Atua;

print_r($ator1);
print_r($atua);

?>