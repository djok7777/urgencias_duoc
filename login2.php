<?php

include_once 'clases/Servicio.php';
$mensaje = "";
$u = null;
if (isset($_POST["txtRut"])) {
    $rut = $_POST["txtRut"];
    $password = $_POST["txtPassword"];

    $us = new Servicio();
    $u = $us->login($rut, $password);
//    echo "Numero nivel". $u->getNivel(); exit();
   
    if ($u == null) {
        $mensaje = "Nombre de usuario o contraseña incorrecta";
    } else {
        //INICIAR SESIÓN
        $nivelP = $u->getNivel();
        session_start();
        $_SESSION["usuario"] = $u;
        header("location: Administrador.php");
    }
//
//    $us = new Servicio();
////    $adm = mysql_query("SELECT * FROM personal_administrativo WHERE rut_personal_adm = '$rut' AND password = '$password'");
////    $esp = mysql_query("SELECT * FROM especialista_medico WHERE rut_especialista = '$rut' AND password = '$password'");
//    $adm = $us->autentificarAdministrador($rut, $password);
//    $esp = $us->autentificarEspecialista($rut, $password);
//
//    if (mysqli_num_rows($adm) > 0) {
//        session_start();
//
//        $_SESSION['personalAdm'] = "$rut";
//
//        header("Location: prueba1.php");
//
//        exit();
//    } else if (mysqli_num_rows($esp) > 0) {
//        session_start();
//        $_SESSION['esp'] = "$rut";
//        header("Location: prueba2.php");
//        exit();
//    } else {
//
//        $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
//        echo $mensajeaccesoincorrecto;
//    }
//    $us = new Servicio();
//
//    $u = $us->autentificarAdministrador($rut_personal_adm, $password);
//    //$u = $us->autentificarEspecialista($rut_especialista, $password);
//
//    if ($u == null) {
//        $mensaje = "Nombre de usuario o contraseña incorrecta";
//    } else {
//        //INICIAR SESIÓN
//        session_start();
//        $_SESSION["usuario"] = $u;
//        header("location: Administrador.php");
////    }
//    }
}