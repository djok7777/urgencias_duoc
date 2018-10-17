<?php
include_once 'clases/Servicio.php';
session_start();
$paciente = new Paciente();
$acompañante = new Acompañante();
$mensaje = "";

//redirección según link : "Registrar Nueva atencion", (elimina sesiones activas)
if (isset($_GET["varname"])) {
    unset($_SESSION["paciente"]);
    unset($_SESSION["acompañante"]);
//redirección según link : "Continuar registro", (carga sesiones activas)
} else {
    if (isset($_SESSION["paciente"])) {
        $paciente = $_SESSION["paciente"];
    }
    if (isset($_SESSION["acompañante"])) {
        $acompañante = $_SESSION["acompañante"];
    }
}

if (isset($_POST["btnPaciente"])) {
    $rut_paciente = $_POST["txtRutPac"];
    cargarPaciente($rut_paciente);
}
if (isset($_POST["btnAcompañante"])) {
    $rut_acompañante = $_POST["txtRutAcomp"];
    cargarAcompañante($rut_acompañante);
}

if (isset($_POST["btnContinuar"])) {
    $serv = new Servicio();
    
    
    //$serv->agregarAtencion('12173740-k','10770988-6','11396482-0','11129630-8','sintomas x',
      //          'AZUL','ATENCION','1600','1990/01/01','S',10,'Bien','En curso');
    
    //$serv->agregarAtencion('12173740-k','10770988-6','11396482-0','11129630-8', 'sintomas x',
      //      'AZUL','ATENCION','1600','1990/01/01','N', null, null,'EN CURSO');
    
    $atencion = new Atencion();
    $atencion->setRut_paciente($_POST["txtRutPac"]);
    $atencion->setRut_acompañante($_POST["txtRutAcomp"]);      
    $atencion->setRut_personal_adm("13283789-9");      
    //$atencion->setSintomas_detectados($_POST["areaSintomas"]);
    $atencion->setNivel_urgencia($_POST["selectUrgencia"]);
    
    $_SESSION["atencion"] = $atencion;
    header("location: registrarAtencionContinuar.php");
}



//FUNCIONES
function cargarPaciente($rut_pac) {
    $serv = new Servicio();
    $paciente = $serv->buscarPaciente($rut_pac);
    if ($paciente != null) {
        if ($paciente->getRut_paciente() == $rut_pac) {
            $_SESSION["paciente"] = $paciente;
            header("location: registrarAtencion.php");
        }
    } else {
        header("location: registrarPaciente.php");
    }
}

function cargarAcompañante($rut_acomp){
    $serv = new Servicio();
    $acompañante = $serv->retornarAcompañante($rut_acomp);
    if ($acompañante != null) {
        if ($acompañante->getRut_acompañante() == $rut_acomp) {
            $_SESSION["acompañante"] = $acompañante;
            header("location: registrarAtencion.php");
        }
    } else {
        header("location: registrarAcompañante.php");
    }
}

//Muestra sexo según parametro M, F
function imprimirSexo($param) {
    if (strtoupper($param) == "M")
        return "Masculino";
    else if ($param == "F")
        return "Femenino";
    else
        return null;
}

//Calcula edad entre la fecha actual y el date fecha de nacimiento. 
function calcularEdad($param){
    if ($param == null) {
        return null;
    }
    else {
    $fecha = new DateTime($param);
    $ahora = new DateTime();
    $intervalo = $ahora->diff($fecha);
    return $intervalo->y;
    }
}