<?php

class Insumo {

    private $id_insumo;
    private $nombre;
    private $stock;

    function getId_insumo() {
        return $this->id_insumo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getStock() {
        return $this->stock;
    }

    function setId_insumo($id_insumo) {
        $this->id_insumo = $id_insumo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setStock($stock) {
        $this->stock = $stock;
    }

}
