<?php

class ExemploStatic{
    public static $voltagem = 110;
    
    public function valorVoltagem(){
        return self::$voltagem;
    }
}

?>