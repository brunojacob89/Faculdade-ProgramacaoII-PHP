<?php

require_once("InterfaceDAO.php");

class Usuario implements interfaceDAO{

    public function insert($parametos,$valores) :bool{
        return true;
    }
    public function update($parametos,$valores) :bool{
        return true;
    }
    public function delete($clausula) :bool{
        return true;
    }
    public function selectAll() :array{
        return [];
    }
    public function loadByID($id) :array{
        return [];
    }
}



?>