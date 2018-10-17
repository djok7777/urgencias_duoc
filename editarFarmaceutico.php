<?php

include_once 'clases/Servicio.php';
$mensaje = "";

if (isset($_POST["nombre"])) {
    $farmacModificar = $_SESSION['farmacModificar'];
    $rut_farmaceutico = $farmacModificar->getRut_farmaceutico();

    $nombres = $_POST["nombre"];
    $apellido_paterno = $_POST["paterno"];
    $apellido_materno = $_POST["materno"];
    $hora_inicio = $_POST["hora_inicio"];
    $hora_termino = $_POST["hora_termino"];
    $password = $_POST["password"];
    $id_nivel = $_POST["idnivel"];
    $us = new Servicio();

    $exito = $us->ModificarFarmaceutico($rut_farmaceutico, $nombres, $apellido_paterno, $apellido_materno, $hora_inicio, $hora_termino, $password, $id_nivel);

    if ($exito) {
        $mensaje = "Farmaceutico Modificado";
    } else {
        $mensaje = "Error al modificar Farmaceutico";
    }
}