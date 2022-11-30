<?php

abstract class Conexao{

    protected function conectarBD(){
        try{
            return $conectar = new mysqli("localhost", "root", "", "dbteste");
        } catch(mysqli_sql_exception $e){
            return $e -> getMessage();
        }
    }
}


?>