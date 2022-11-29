<?php
require_once ('PessoaH.php');

final class Juridica extends Pessoa{
    private $razaosocial, $cnpj;

    function __construct($razaosocial, $cnpj, $endereco, $email, $dataCadastro){
        $this -> setRazaosocial($razaosocial);
        $this -> setCNPJ($cnpj);
        parent :: __construct($endereco, $email, $dataCadastro);
        
    }

    private function setRazaosocial($razaosocial) :bool {
        if(is_string($razaosocial)){
            $this -> razaosocial = $razaosocial;
            return true;
        }else {
            return false;
        }
    }

    private function setCNPJ($cnpj) :bool {
        if(is_string($cnpj)){
            $this -> cnpj = $cnpj;
            return true;
        }else {
            return false;
        }
    }

    public function exibirDados(){
        $dados = array("razaosocial" => $this -> razaosocial,
                        "cnpj" => $this -> cnpj, 
                        "endereco" => $this -> endereco, 
                        "email" => $this -> email,
                        "dataCadastro" => $this -> dataCadastro);
            return json_encode($dados);
    }
}

?>