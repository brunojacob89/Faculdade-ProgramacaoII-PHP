<?php
require_once ('classes/mesa.php');

$mesa1 = new Mesa();

$mesa1-> adicionarMesa(4,"Madeira Rústica", "Retangular");

echo "Mesa Cadastrada: ".$mesa1-> mostraMesa();

?>