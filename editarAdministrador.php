<?php

include_once 'clases/Servicio.php';
$mensaje = "";

if (isset($_POST["nombre"])) {
    $adminModificar = $_SESSION['adminModificar'];
    $rut_personal_adm = $adminModificar->getRut_personal_adm();

    $nombres = $_POST["nombre"];
    $apellido_paterno = $_POST["paterno"];
    $apellido_materno = $_POST["materno"];
    $titulo = $_POST["titulo"];
    $fono = $_POST["fono"];
    $password = $_POST["password"];
    $id_nivel = $_POST["idnivel"];
    $us = new Servicio();

    $exito = $us->ModificarAdministrador($rut_personal_adm, $nombres, $apellido_paterno, $apellido_materno, $titulo, $fono, $id_nivel);

    if ($exito) {
        $mensaje = "Administrador Modificado";
    } else {
        $mensaje = "Error al modificar Administrador";
    }
}