<?php

class Nivel {

    private $id_nivel;
    private $nombre;

    function getId_nivel() {
        return $this->id_nivel;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId_nivel($id_nivel) {
        $this->id_nivel = $id_nivel;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}
