<?php

include_once 'clases/Servicio.php';
if (isset($_GET["rut"])) {
    $rut = $_GET["rut"];
    $farmSer = new Servicio();
    $farmSer->eliminarFarmaceutico($rut);
}
header("location: verAdministrativos.php");
