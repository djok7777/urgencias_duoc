<?php

class PersonalAdministrativo {

    private $rut_personal_adm;
    private $nombres;
    private $apellido_paterno;
    private $apellido_materno;
    private $titulo;
    private $fono;
    private $password;
    private $nivel;

    function getRut_personal_adm() {
        return $this->rut_personal_adm;
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

    function getTitulo() {
        return $this->titulo;
    }

    function getFono() {
        return $this->fono;
    }

    function getPassword() {
        return $this->password;
    }

    function getNivel() {
        return $this->nivel;
    }

    function setRut_personal_adm($rut_personal_adm) {
        $this->rut_personal_adm = $rut_personal_adm;
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

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setFono($fono) {
        $this->fono = $fono;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }

}
