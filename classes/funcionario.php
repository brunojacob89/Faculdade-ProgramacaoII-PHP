<?php

class Funcionario{

    public $nome;
    private $email;
    protected $salario;

    public function setNome($nome){ // não necessita pois é um public
        $this -> nome = $nome;
    }

    public function setEmail($email){
        $this -> email = $email;
    }

    public function setSalario($salario){
        $this -> salario = $salario;
    }

    public function getNome(){ // não necessita pois é um public
        return $this -> nome;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function getSalario(){
        return $this -> salario;
    }
}

?>