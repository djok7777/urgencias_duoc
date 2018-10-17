<?php

class Paciente {

    private $rut_paciente;
    private $nombres;
    private $apellido_paterno;
    private $apellido_materno;
    private $fecha_nacimiento;
    private $sexo;
    private $estado_civil;
    private $domicilio;
    private $grupo_sanguineo;
    private $fono;

    function getRut_paciente() {
        return $this->rut_paciente;
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

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEstado_civil() {
        return $this->estado_civil;
    }

    function getDomicilio() {
        return $this->domicilio;
    }

    function getGrupo_sanguineo() {
        return $this->grupo_sanguineo;
    }

    function getFono() {
        return $this->fono;
    }

    function setRut_paciente($rut_paciente) {
        $this->rut_paciente = $rut_paciente;
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

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEstado_civil($estado_civil) {
        $this->estado_civil = $estado_civil;
    }

    function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    function setGrupo_sanguineo($grupo_sanguineo) {
        $this->grupo_sanguineo = $grupo_sanguineo;
    }

    function setFono($fono) {
        $this->fono = $fono;
    }

}
