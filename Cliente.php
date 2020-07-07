<?php
class Cliente {
    $phone;
    $nombre;
    $pass;
    public function __construct() {}

    function setNombre($nombre) {
        $this->nombre = $nombre;  
    }
    function getNombre() {
        return $this->nombre;
    }
    function setPhone() {
        $this->phone = $phone;
    }
    function getPhone() {
        return $this->phone;
    }
    function setPass() {
        $this->setPass = $pass;
    }
    function getPass() {
        return $this->pass;
    }
}
