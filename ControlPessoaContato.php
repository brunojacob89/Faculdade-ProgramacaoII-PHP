<?php
require_once ("classes/PessoaContato.php");

$contato1 = new Pessoa();
$contato1 -> setContato(15, "Bruno Jacob", "bruno@email.com", 324567890);

echo $contato1 -> getContato();


?>