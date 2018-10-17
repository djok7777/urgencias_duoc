<?php

include_once 'clases/Servicio.php';
$mensaje = "";
if (isset($_GET["rut"])) {
    $rut_personal_adm = $_GET["rut"];
    
    $se = new Servicio();
    session_start();
    $_SESSION["adminModificar"] = $se->buscarAdministradorPorRut($rut_personal_adm);
    $user = $se->buscarAdministradorPorRut($rut_personal_adm);
    //echo 'Rut recibido: '. $user->getRut_personal_adm(); exit();
}
header("location: modificarAdministrador.php");