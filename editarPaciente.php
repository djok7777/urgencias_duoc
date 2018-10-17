<?php

include_once 'clases/Servicio.php';
$mensaje = "";

if (isset($_POST["nombre"])) {
    $paciModificar = $_SESSION['paciModificar'];
    $rut_paciente = $paciModificar->getRut_paciente();

    $nombres = $_POST["nombre"];
    $apellido_paterno = $_POST["paterno"];
    $apellido_materno = $_POST["materno"];
//    $fecha_nacimiento = $_POST["fecha_nacimiento"];//
//    $sexo = $_POST["sexo"]; 
    $estado_civil = $_POST["estado_civil"];//
    $domicilio = $_POST["domicilio"];
    $grupo_sanguineo = $_POST["grupo_sanguineo"];
    $fono = $_POST["fono"];

    $us = new Servicio();

    $exito = $us->ModificarPaciente($rut_paciente, $nombres, $apellido_paterno, $apellido_materno, $estado_civil, $domicilio, $grupo_sanguineo, $fono);

    if ($exito) {
        $mensaje = "Paciente Modificado";
    } else {
        $mensaje = "Error al modificar Paciente";
    }
}