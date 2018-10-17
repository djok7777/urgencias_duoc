<?php

class Especialidad {

    private $id_especialidad;
    private $nombre;

    function getId_especialidad() {
        return $this->id_especialidad;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId_especialidad($id_especialidad) {
        $this->id_especialidad = $id_especialidad;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}
