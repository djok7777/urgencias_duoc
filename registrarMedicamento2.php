<?php

include_once 'clases/Servicio.php';
$mensaje = "";
if (isset($_POST["txtNombre"])) {

    //CAPTURAR DATOS DESDE FORM
    $id_medicamento = $_POST["txtID"];
    $nombre = $_POST["txtNombre"];
    $descripcion = $_POST["txtDescripcion"];
    $fecha_caducidad = $_POST["txtCaducidad"];
    $contraindicaciones = $_POST["txtContra"];
    $stock = $_POST["txtStock"];
    $proveedor = $_POST["txtProveedor"];


    $us = new Servicio();

    $exito = $us->agregarMedicamento($id_medicamento, $nombre, $descripcion, $fecha_caducidad, $contraindicaciones, $stock, $proveedor);

    if ($exito) {
        $mensaje = "Registro exitoso";
    } else {
        $mensaje = "No se ha podido registrar el nuevo Medicamento";
    }
}
