<?php

class Atencion {

    private $nro_atencion;
    private $rut_paciente;
    private $rut_acompañante;
    private $rut_personal_adm;
    private $rut_especialista;
    private $sintomas_detectados;
    private $nivel_urgencia;
    private $tipo;
    private $hora;
    private $fecha;
    private $reposo;
    private $cantidad_dias;
    private $diagnostico;
    private $estado;
   
    function getNro_atencion() {
        return $this->nro_atencion;
    }

    function getRut_paciente() {
        return $this->rut_paciente;
    }

    function getRut_acompañante() {
        return $this->rut_acompañante;
    }

    function getRut_personal_adm() {
        return $this->rut_personal_adm;
    }

    function getRut_especialista() {
        return $this->rut_especialista;
    }

    function getSintomas_detectados() {
        return $this->sintomas_detectados;
    }

    function getNivel_urgencia() {
        return $this->nivel_urgencia;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getHora() {
        return $this->hora;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getReposo() {
        return $this->reposo;
    }

    function getCantidad_dias() {
        return $this->cantidad_dias;
    }

    function getDiagnostico() {
        return $this->diagnostico;
    }

    function getEstado() {
        return $this->estado;
    }

    function setNro_atencion($nro_atencion) {
        $this->nro_atencion = $nro_atencion;
    }

    function setRut_paciente($rut_paciente) {
        $this->rut_paciente = $rut_paciente;
    }

    function setRut_acompañante($rut_acompañante) {
        $this->rut_acompañante = $rut_acompañante;
    }

    function setRut_personal_adm($rut_personal_adm) {
        $this->rut_personal_adm = $rut_personal_adm;
    }

    function setRut_especialista($rut_especialista) {
        $this->rut_especialista = $rut_especialista;
    }

    function setSintomas_detectados($sintomas_detectados) {
        $this->sintomas_detectados = $sintomas_detectados;
    }

    function setNivel_urgencia($nivel_urgencia) {
        $this->nivel_urgencia = $nivel_urgencia;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setReposo($reposo) {
        $this->reposo = $reposo;
    }

    function setCantidad_dias($cantidad_dias) {
        $this->cantidad_dias = $cantidad_dias;
    }

    function setDiagnostico($diagnostico) {
        $this->diagnostico = $diagnostico;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }


}
