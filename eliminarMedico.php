<?php

include_once 'clases/Servicio.php';
if (isset($_GET["rut"])) {
    $rut = $_GET["rut"];
    $medicSer = new Servicio();
    $medicSer->eliminarMedico($rut);
}
header("location: verAdministrativos.php");
