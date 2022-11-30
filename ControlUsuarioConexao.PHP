<?php
require_once ('conexao.php');
require_once ('UsuarioMySQLi.php');

$usuario = new Usuario();
$dados1 = [
    'nome' => 'Bruno Jacob',
    'email' => 'bruno@email.com',
    'dataNascimento' => '2010-10-12',
    'telefone' => '(083) 8834-5672'
];
$dadosUser = json_encode($dados1);


$addUsuarios = $usuario -> inserirUsuario($dadosUser);

echo "<h2>Listar Usuarios:</h2>";
$listarUsuarios = $usuario -> listarUsuario();
echo $listarUsuarios;





?>