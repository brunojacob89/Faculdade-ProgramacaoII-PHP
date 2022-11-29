<?php
require_once ('classes/jogador.php');

$jogador1 = new Jogador(10, "Bruno");
$jogador2 = new Jogador(9, "Jacob");
$jogador3 = new Jogador(5, "Fulano");

$jogador1 -> setCodigoCapitao($jogador3);
$jogador2 -> setCodigoCapitao($jogador3);

echo $jogador1;
echo $jogador2;

?>