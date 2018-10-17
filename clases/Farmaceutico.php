<?php

class Farmaceutico {

    private $rut_farmaceutico;
    private $nombres;
    private $apellido_paterno;
    private $apellido_materno;
    private $hora_inicio;
    private $hora_termino;
    private $password;
    private $nivel;

    function getRut_farmaceutico() {
        return $this->rut_farmaceutico;
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

    function getHora_inicio() {
        return $this->hora_inicio;
    }

    function getHora_termino() {
        return $this->hora_termino;
    }

    function getPassword() {
        return $this->password;
    }

    function getNivel() {
        return $this->nivel;
    }

    function setRut_farmaceutico($rut_farmaceutico) {
        $this->rut_farmaceutico = $rut_farmaceutico;
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

    function setHora_inicio($hora_inicio) {
        $this->hora_inicio = $hora_inicio;
    }

    function setHora_termino($hora_termino) {
        $this->hora_termino = $hora_termino;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }

}
