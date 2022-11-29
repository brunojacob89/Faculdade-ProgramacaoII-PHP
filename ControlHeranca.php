<?php 
require_once('classes/fisicaH.php');
require_once('classes/juridicaH.php');

$pessoaFisica = new Fisica("Bruno Jacob", "123456789", "Rua1", "brunoa@email.com", "2021-12-08");
//print_r($pessoaFisica);
$dados = $pessoaFisica -> exibirDados();
echo $dados;

$pessoaJuridica = new Juridica("MEI", "1223434211", "rua 2", "empresa@mail.com", "2021-08-12");
//print_r($pessoaJuridica);
$dados2 = $pessoaJuridica -> exibirDados();
echo $dados2;

?>