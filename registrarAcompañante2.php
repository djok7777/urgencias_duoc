<?php

include_once 'clases/Servicio.php';

$mensaje = "";

if (isset($_POST["txtRut"])) {

    //CAPTURAR DATOS DESDE FORM
    $rut_acompañante = $_POST["txtRut"];
    $nombres = $_POST["txtNombre"];
    $apellido_paterno = $_POST["txtAPa"];
    $apellido_materno = $_POST["txtAMa"];
    $grado_parentesco = $_POST["txtGrado"];
    $fono = $_POST["txtFono"];

    $us = new Servicio();
    //VALIDACIONES
    if ($us->buscarAcompañante($rut_acompañante)) {
        $mensaje = "Usuario ya existe, cambia el nombre de usuario";
    } else {
        //INGRESO BD
        $exito = $us->agregarAcompañante($rut_acompañante, $nombres, $apellido_paterno, $apellido_materno, $grado_parentesco, $fono);
        if ($exito) {
            $mensaje = "Registro exitoso";
        } else {
            $mensaje = "No se ha podido registrar el nuevo usuario";
        }
    }
}
