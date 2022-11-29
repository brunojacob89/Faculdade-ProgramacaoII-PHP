<?php

interface interfaceDAO{

    public function insert($parametos,$valores) :bool;
    public function update($parametos,$valores) :bool;
    public function delete($clausula) :bool;
    public function selectAll() :array;
    public function loadByID($id) :array;
}


?>