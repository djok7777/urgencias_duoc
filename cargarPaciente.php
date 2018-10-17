<?php

include_once 'clases/Servicio.php';
$mensaje = "";
if (isset($_GET["rut"])) {
    $rut_paciente = $_GET["rut"];
    
    $se = new Servicio();
    session_start();
    $_SESSION["paciModificar"] = $se->buscarPacientePorRut($rut_paciente);
    $user = $se->buscarPacientePorRut($rut_paciente);
    //echo 'Rut recibido: '. $user->getRut_personal_adm(); exit();
}
header("location: modificarPaciente.php");