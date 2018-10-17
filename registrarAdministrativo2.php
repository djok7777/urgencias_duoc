<?php

include_once 'clases/Servicio.php';

$comboniv = comboNiveles();  //STRING QUE ESCRIBIRÁ CADA OPCIÓN DEL COMBOBOX NIVELES, SEGÚN LO QUE RETORNE LA FUNCIÓN.
$mensaje = "";

if (isset($_POST["txtRut"])) {

    //CAPTURAR DATOS DESDE FORM
    $rut_personal_adm = $_POST["txtRut"];
    $nombres = $_POST["txtNombres"];
    $apellido_paterno = $_POST["txtAPa"];
    $apellido_materno = $_POST["txtAMa"];
    $titulo = $_POST["txtTitulo"];
    $fono = $_POST["txtFono"];
    $password = $_POST["txtPassword"];
    $id_nivel = $_POST["selectNivel"];

    $us = new Servicio();
    //VALIDACIONES
    if ($us->buscarAdministrador($rut_personal_adm)) {
        $mensaje = "Usuario ya existe, cambia el nombre de usuario";
    } else {
        //INGRESO BD
        $exito = $us->ingresarAdministrador($rut_personal_adm, $nombres, $apellido_paterno, $apellido_materno, $titulo, $fono, $password, $id_nivel);
        if ($exito) {
            $mensaje = "Registro exitoso";
        } else {
            $mensaje = "No se ha podido registrar el nuevo usuario";
        }
    }
}


/* ========================== FUNCIONES =================================== */

////CARGAR NIVELES DESDE LA BDD PARA MOSTRARLOS EN COMBOBOX
function comboNiveles() {
    $opciones = "";
    $nvS = new Servicio();
    $niveles = $nvS->listarNivel();  //RETORNA UN ARREGLO

    while ($nivel = array_shift($niveles)) {
        $opciones .=" <option value='" . $nivel->getId_nivel() . "'>" . $nivel->getNombre() . "</option>";
    }
    return $opciones;
}
