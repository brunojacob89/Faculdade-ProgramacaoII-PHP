<?php

class Pessoa{ // criacao de uma classe chamada pessoa
    
    //atributos
    public $nome;
    public $email;
    public $telefone;
    public $datanascimento;

    //Construtor
    function __construct($nome, $email, $telefone, $datanascimento){
       
        $this -> nome = $nome;
        $this -> email = $email;
        $this -> telefone = $telefone;
        $this -> datanascimento = $datanascimento;

    }

    //metodo
    public function getPessoa(){
        echo "<br> Nome: " .$this -> nome; // recuperando o valor atribuido
        echo "<br> Email: " .$this -> email;
        echo "<br> Telegone: " .$this -> telefone;
        echo "<br> Data Nascimento: " .$this -> datanascimento;
    }

    function __destruct(){
        echo "Objeto Finalizado!!!";
    }

}

?>