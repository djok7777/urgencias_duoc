<?php

include_once 'clases/Servicio.php';

session_start();
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
} else {
    $u = $_SESSION["usuario"];
}

$mensaje = "";
if (isset($_POST["txtRut"])) {

    //CAPTURAR DATOS DESDE FORM
    $rut_farmaceutico = $_POST["txtRut"];
    $nombres = $_POST["txtNombre"];
    $apellido_paterno = $_POST["txtAPa"];
    $apellido_materno = $_POST["txtAMa"];
    $hora_inicio = $_POST["txtHoraIni"];
    $hora_termino = $_POST["txtHoraTer"];
    $password = $_POST["txtPassword"];
    $nivel = 6;


    $us = new Servicio();

    $exito = $us->ingresarFarmaceutico($rut_farmaceutico, $nombres, $apellido_paterno, $apellido_materno, $hora_inicio, $hora_termino, $password, $nivel);

    if ($exito == 1) {
        $mensaje = "Registro exitoso";
    } else {
        $mensaje = "No se ha podido registrar el nuevo Farmaceutico";
    }
}
