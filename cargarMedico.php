<?php

include_once 'clases/Servicio.php';
$mensaje = "";
if (isset($_GET["rut"])) {
    $rut_especialista = $_GET["rut"];
    
    $se = new Servicio();
    session_start();
    $_SESSION["medicModificar"] = $se->buscarMedicoPorRut($rut_especialista);
    $user = $se->buscarMedicoPorRut($rut_especialista);
    //echo 'Rut recibido: '. $user->getRut_personal_adm(); exit();
}
header("location: modificarMedico.php");