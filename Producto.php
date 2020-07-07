<?php

Class Producto {
    private $nombre;
    private $precio;
    private $cantidad;
    
    public function __construct() {}

    function getNombre() {
        return $this->nombre;
    }
    function getPrecio() {
        return $this->precio;
    }
    function getCantidad() {
        return $this->$cantidad;
    }
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function setPrecio($precio) {
        $this->precio = $precio;
    }
    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }
}