<?php

include_once 'clases/Servicio.php';
if (isset($_GET["rut"])) {
    $rut = $_GET["rut"];
    $admSer = new Servicio();
    $admSer->eliminarAdministrador($rut);
}
header("location: verAdministrativos.php");
