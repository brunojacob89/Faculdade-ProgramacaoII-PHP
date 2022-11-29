<?php
require_once ('conta.php');

class ContaCorrente extends Conta{

    private $limite;

    function __construct($agencia, $numeroConta, $titular, $saldo,$limite){
        parent :: __construct($agencia, $numeroConta, $titular, $saldo);
        $this -> setLimite($limite);
    }

    public function retirar($valor) :bool{
        if($this -> getSaldo() + $this -> getLimite() > $valor){
            parent::retirada($valor);
            return true;
        } else{
            return false;
        } 
    }

    public function exibirExtrato(){
        $dados = ["titular" => $this ->getTitular(),
        "Agencia" => $this ->getAgencia(),
        "Conta" => $this ->getNumeroConta(),
        "Saldo" => $this ->getSaldo()
    ];

        return json_encode($dados);
    }

    public function setLimite($limite) :bool {
        $this -> limite = $limite;
        return true;
    }

    public function getLimite() {
        return $this -> limite;
        
    }
}

?>