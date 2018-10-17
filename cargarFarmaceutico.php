<?php

include_once 'clases/Servicio.php';
$mensaje = "";
if (isset($_GET["rut"])) {
    $rut_farmaceutico = $_GET["rut"];
    
    $se = new Servicio();
    session_start();
    $_SESSION["farmacModificar"] = $se->buscarFarmaceuticoPorRut($rut_farmaceutico);
    $user = $se->buscarFarmaceuticoPorRut($rut_farmaceutico);
    //echo 'Rut recibido: '. $user->getRut_personal_adm(); exit();
}
header("location: modificarFarmaceutico.php");