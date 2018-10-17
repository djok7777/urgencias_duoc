<?php

include_once 'clases/Servicio.php';
$mensaje = "";
if (isset($_POST["txtRut"])) {

    //CAPTURAR DATOS DESDE FORM
    $rut_paciente = $_POST["txtRut"];
    $nombres = $_POST["txtNombre"];
    $apellido_paterno = $_POST["txtAPa"];
    $apellido_materno = $_POST["txtAMa"];
    $fecha_nacimiento = '2004/05/23';
    $sexo = "f";
    $estado_civil = "s";
    $domicilio = $_POST["txtDomicilio"];
    $grupo_sanguineo = $_POST["selectSanguineo"];
    $fono = $_POST["txtFono"];


    $us = new Servicio();

    $exito = $us->ingresarPaciente($rut_paciente, $nombres, $apellido_paterno, $apellido_materno, $fecha_nacimiento, $sexo, $estado_civil, $domicilio, $grupo_sanguineo, $fono);

    if ($exito) {
        $mensaje = "Registro exitoso";
    } else {
        $mensaje = "No se ha podido registrar el nuevo Paciente";
    }
}

    