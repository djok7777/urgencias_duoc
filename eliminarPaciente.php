<?php

include_once 'clases/Servicio.php';
if (isset($_GET["rut"])) {
    $rut = $_GET["rut"];
    $paciSer = new Servicio();
    $paciSer->eliminarPaciente($rut);
}
header("location: verAdministrativos.php");
