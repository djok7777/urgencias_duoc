<?php

class DetalleMedicamento {

    private $atencion;
    private $medicamento;
    private $farmaceutico;
    private $dosis;
    private $cantidad_dias;
    private $anotaciones;
    private $estado;

    function getAtencion() {
        return $this->atencion;
    }

    function getMedicamento() {
        return $this->medicamento;
    }

    function getFarmaceutico() {
        return $this->farmaceutico;
    }

    function getDosis() {
        return $this->dosis;
    }

    function getCantidad_dias() {
        return $this->cantidad_dias;
    }

    function getAnotaciones() {
        return $this->anotaciones;
    }

    function getEstado() {
        return $this->estado;
    }

    function setAtencion($atencion) {
        $this->atencion = $atencion;
    }

    function setMedicamento($medicamento) {
        $this->medicamento = $medicamento;
    }

    function setFarmaceutico($farmaceutico) {
        $this->farmaceutico = $farmaceutico;
    }

    function setDosis($dosis) {
        $this->dosis = $dosis;
    }

    function setCantidad_dias($cantidad_dias) {
        $this->cantidad_dias = $cantidad_dias;
    }

    function setAnotaciones($anotaciones) {
        $this->anotaciones = $anotaciones;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

}
