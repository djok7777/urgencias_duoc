<?php

class detalle_especialidad {

    private $especialistaMedico;
    private $especialidad;
    private $institucion_egreso;
    private $fecha_egreso;
    private $anos_ejercidos;

    function getEspecialistaMedico() {
        return $this->especialistaMedico;
    }

    function getEspecialidad() {
        return $this->especialidad;
    }

    function getInstitucion_egreso() {
        return $this->institucion_egreso;
    }

    function getFecha_egreso() {
        return $this->fecha_egreso;
    }

    function getAnos_ejercidos() {
        return $this->anos_ejercidos;
    }

    function setEspecialistaMedico($especialistaMedico) {
        $this->especialistaMedico = $especialistaMedico;
    }

    function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }

    function setInstitucion_egreso($institucion_egreso) {
        $this->institucion_egreso = $institucion_egreso;
    }

    function setFecha_egreso($fecha_egreso) {
        $this->fecha_egreso = $fecha_egreso;
    }

    function setAnos_ejercidos($anos_ejercidos) {
        $this->anos_ejercidos = $anos_ejercidos;
    }

}
