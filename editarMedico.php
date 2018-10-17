<?php

include_once 'clases/Servicio.php';
$mensaje = "";

if (isset($_POST["nombre"])) {
    $medicModificar = $_SESSION['medicModificar'];
    $rut_especialista = $medicModificar->getRut_especialista();

    $nombres = $_POST["nombre"];
    $apellido_paterno = $_POST["paterno"];
    $apellido_materno = $_POST["materno"];
    $fono = $_POST["fono"];
    $hora_inicio = $_POST["hora_inicio"];
    $hora_termino = $_POST["hora_termino"];
//    $sector = $_POST["sector"];
    $password = $_POST["password"];
    $id_nivel = $_POST["idnivel"];
    $us = new Servicio();

    $exito = $us->ModificarMedico($rut_especialista, $nombres, $apellido_paterno, $apellido_materno, $fono, $hora_inicio, $hora_termino, $password, $id_nivel);

    if ($exito) {
        $mensaje = "Medico Modificado";
    } else {
        $mensaje = "Error al modificar Medico";
    }
}

//function imprimirSector($param) {
//    if (strtoupper($param) == "ROJO")
//        return "Rojo";
//    else if (strtoupper($param) == "AZUL")
//        return "Azul";
//    else
//        return null;
//}
