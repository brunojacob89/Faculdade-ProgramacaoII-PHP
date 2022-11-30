<?php
require_once ('conexao.php');

class Usuario extends Conexao{

    protected $conectar;
    private $nome, $email, $dataNascimento, $telefone;

    public function __construct(){
        $this -> conectar = $this -> conectarBD();
    }

    public function setDados($dados){
        $objeCadastro = json_decode($dados);
        $this -> nome = $objeCadastro -> nome;
        $this -> email = $objeCadastro -> email;
        $this -> dataNascimento = $objeCadastro -> dataNascimento;
        $this -> telefone = $objeCadastro -> telefone;
    }

    public function inserirUsuario($dados){
        $this -> setDados($dados);
        $sql = "INSERT INTO usuario (nome, email, dataNascimento, telefone) VALUE ('$this -> nome', '$this -> email', '$this -> dataNascimento', '$this -> telefone')";
        $retorno = $this -> conectar -> query($sql);
        if($retorno){
            return 1;
        }else{
            return 0;
        }
    }
    public function listarUsuario(){
        $sql = "SELECT * FROM usuario ORDER BY nome ASC";
        $retorno = $this -> conectar -> query($sql);

        $usuarios = array();
        while($linha = $retorno -> fetch_assoc()){
            $usuarios[]  = $linha;
        }
        return json_encode($usuarios);
    }

    /*MySQLi Preparado */
    public function inserirUsuarioPreparado($dados){
        $this -> setDados($dados);
        $sql = "INSERT INTO usuario (nome,email,dataNascimento,telefone) VALUES (?, ?, ?, ?)";
        
        $stmt = $this -> conectar -> prepare($sql);
        $stmt -> bind_param("ssss", $this -> nome, $this -> email, $this -> dataNascimento, $this -> telefone);

        $retorno = $stmt -> execute();
        if($retorno > 0){
            return 1;
        }else{
            return 0;
        }
    }

    public function buscarUsuarioPreparado($id){
        $sql = "SELECT * FROM usuario where id = ?";

        $retorno = $this -> conectar -> query($sql);

        $stmt = $this -> conectar -> prepare($sql);
        $stmt -> bind_param("d", $id);

        $stmt -> execute();
        $dadoUsuario = $stmt -> get_result() -> fetch_all(MYSQLI_ASSOC);

        return json_encode($dadoUsuario);
    }
    
}




?>
