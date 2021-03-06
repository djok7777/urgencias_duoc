<?php

class EspecialistaMedico {

    private $rut_especialista;
    private $nombres;
    private $apellido_paterno;
    private $apellido_materno;
    private $fono;
    private $hora_inicio;
    private $hora_termino;
    private $sector;
    private $password;
    private $nivel;

    function getRut_especialista() {
        return $this->rut_especialista;
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

    function getFono() {
        return $this->fono;
    }

    function getHora_inicio() {
        return $this->hora_inicio;
    }

    function getHora_termino() {
        return $this->hora_termino;
    }

    function getSector() {
        return $this->sector;
    }

    function getPassword() {
        return $this->password;
    }

    function getNivel() {
        return $this->nivel;
    }

    function setRut_especialista($rut_especialista) {
        $this->rut_especialista = $rut_especialista;
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

    function setFono($fono) {
        $this->fono = $fono;
    }

    function setHora_inicio($hora_inicio) {
        $this->hora_inicio = $hora_inicio;
    }

    function setHora_termino($hora_termino) {
        $this->hora_termino = $hora_termino;
    }

    function setSector($sector) {
        $this->sector = $sector;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }

}
