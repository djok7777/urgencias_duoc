<?php

class DetalleInsumo {

    private $atencion;
    private $insumo;
    private $cantidad;
    private $anotaciones;

    function getAtencion() {
        return $this->atencion;
    }

    function getInsumo() {
        return $this->insumo;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getAnotaciones() {
        return $this->anotaciones;
    }

    function setAtencion($atencion) {
        $this->atencion = $atencion;
    }

    function setInsumo($insumo) {
        $this->insumo = $insumo;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setAnotaciones($anotaciones) {
        $this->anotaciones = $anotaciones;
    }

}
