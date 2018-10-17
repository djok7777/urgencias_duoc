<?php

class Acompañante {

    private $rut_acompañante;
    private $nombres;
    private $apellido_paterno;
    private $apellido_materno;
    private $grado_parentesco;
    private $fono;

    function getRut_acompañante() {
        return $this->rut_acompañante;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellido_paterno() {
        return $this->apellido_paterno;
    }

    function getApellido_materno() {
        return $this->apellido_materno;
    }

    function getGrado_parentesco() {
        return $this->grado_parentesco;
    }

    function getFono() {
        return $this->fono;
    }

    function setRut_acompañante($rut_acompañante) {
        $this->rut_acompañante = $rut_acompañante;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellido_paterno($apellido_paterno) {
        $this->apellido_paterno = $apellido_paterno;
    }

    function setApellido_materno($apellido_materno) {
        $this->apellido_materno = $apellido_materno;
    }

    function setGrado_parentesco($grado_parentesco) {
        $this->grado_parentesco = $grado_parentesco;
    }

    function setFono($fono) {
        $this->fono = $fono;
    }

}
