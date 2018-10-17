<?php

include_once 'clases/Servicio.php';
$mensaje = "";
    
    if (isset($_POST["txtRut"])) {

    $rut_especialista = $_POST["txtRut"];
    $nombres = $_POST["txtNombre"];
    $apellido_paterno = $_POST["txtAPa"];
    $apellido_materno = $_POST["txtAMa"];
    $fono = $_POST["txtFono"];
    $hora_inicio = $_POST["txtHoraI"];
    $hora_termino = $_POST["txtHoraT"];
    $sector = $_POST["idSector"];
    $password = $_POST["txtPassword"];
    $id_nivel = $_POST["idnivel"];

    $se = new Servicio();

    if ($id_nivel == 0) {
        echo "<script>
        alert('Seleccione un nivel valido');
        window.location.href='registrarFuncionario.php';
        </script>";
    }
    
    if ($se->buscarEspecialista($rut_especialista) == 1) {
            echo "<script>
            alert('Error, médico ya existe');
            window.location.href='registrarFuncionario.php';
            </script>";
    } else {
        $exito = $se->ingresarEspecialista($rut_especialista, $nombres, $apellido_paterno, $apellido_materno, $fono, $hora_inicio, $hora_termino, $sector, $password, $id_nivel);
        if ($exito) {
            echo "<script>
            alert('Registro éxitoso');
            window.location.href='registrarFuncionario.php';
            </script>";
        }
    }
}
