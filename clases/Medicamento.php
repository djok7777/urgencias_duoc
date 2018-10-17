<?php

class Medicamento {

    private $id_medicamento;
    private $nombre;
    private $descripcion;
    private $fecha_caducidad;
    private $contraindicaciones;
    private $stock;
    private $proveedor;

    function getId_medicamento() {
        return $this->id_medicamento;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFecha_caducidad() {
        return $this->fecha_caducidad;
    }

    function getContraindicaciones() {
        return $this->contraindicaciones;
    }

    function getStock() {
        return $this->stock;
    }

    function getProveedor() {
        return $this->proveedor;
    }

    function setId_medicamento($id_medicamento) {
        $this->id_medicamento = $id_medicamento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFecha_caducidad($fecha_caducidad) {
        $this->fecha_caducidad = $fecha_caducidad;
    }

    function setContraindicaciones($contraindicaciones) {
        $this->contraindicaciones = $contraindicaciones;
    }

    function setStock($stock) {
        $this->stock = $stock;
    }

    function setProveedor($proveedor) {
        $this->proveedor = $proveedor;
    }

}
