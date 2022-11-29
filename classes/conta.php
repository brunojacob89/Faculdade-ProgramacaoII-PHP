<?php

class Conta{
    protected $agencia, $numeroConta, $titular, $saldo;

    function __construct($agencia, $numeroConta, $titular, $saldo) {
        $this -> setAgencia($agencia);
        $this -> setNumeroConta($numeroConta);
        $this -> setTitular($titular);
        $this -> setSaldo($saldo);
    }

    public function depositar($valor) :bool {
        if(is_float($valor)>0){
            $this -> setSaldo($this -> getSaldo() + $valor);
            return true;
        }
    }

    public function retirada ($valor) : bool {
        if(is_float($valor)>0){
            if($this -> getSaldo() + $valor){

                $this -> setSaldo($this -> getSaldo() - $valor);
                return true;
            }
            
        }
    }

    public function setAgencia($agencia) :bool {
        $this -> agencia = $agencia;
        return true;
    }

    public function setNumeroConta($numeroConta) :bool {
        $this -> numeroConta = $numeroConta;
        return true;
    }
    
    public function setTitular($titular) :bool {
        $this -> titular = $titular;
        return true;
    }

    public function setSaldo($saldo) :bool {
        $this -> saldo = $saldo;
        return true;
    }

    public function getSaldo() {
        return $this -> saldo;
        
    }

    public function getAgencia() {
        return $this -> agencia;
        
    }

    public function getNumeroConta() {
        return $this -> numeroConta;
        
    }
    public function getTitular() {
        return $this -> titular;
        
    }
}

?>