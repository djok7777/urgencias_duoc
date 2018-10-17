<?php
include_once 'clases/Servicio.php';
session_start();

$mensaje = null;
$especialidades = comboEspecialidad();
$horaDisponible = obtenerHora();

//AL SELECCIONAR UNA ESPECIALIDAD
if (isset($_POST["selectEspecialidad"])) {
    $especialistasMedicos = comboEspecialistas($_POST["selectEspecialidad"]);
    $especialidades = comboEspecialidadSelected($_POST["selectEspecialidad"]);
}
else{
    $especialistasMedicos = "null";
}

//AL PRESIONAR REGISTRAR
if (isset($_POST["btnRegistrar"])) {
    $atencion = $_SESSION["atencion"];
    $serv = new Servicio();
    $atencion->setRut_especialista($_POST["selectEspecialistasMedicos"]);
    $atencion->setTipo("ATENCION");
    
    $hora = str_replace(':', '', $horaDisponible);
    $atencion->setHora((int)($hora));
    
    $now = new DateTime();
    $atencion->setFecha($now->format('Y/m/d'));
    $atencion->setReposo("N");
    $atencion->setEstado("EN CURSO");
    
    $serv->agregarAtencion($atencion->getRut_paciente(), $atencion->getRut_acompañante(), $atencion->getRut_personal_adm(), $atencion->getRut_especialista(), 
        $atencion->getSintomas_detectados(), $atencion->getNivel_urgencia(), $atencion->getTipo(), $atencion->getHora(), $atencion->getFecha(), 
        $atencion->getReposo(), null, null, $atencion->getEstado());
    
        echo "<script>
        alert('Éxito en el registro, esperar hora de atención $horaDisponible');
        window.location.href='inicio.php';
        </script>";
}



//FUNCIONES
function comboEspecialidad() {
    $options = "";
    $serv = new Servicio();
    $especialidades = $serv->listarEspecialidad();  //RETORNA UN ARREGLO

    while ($espec = array_shift($especialidades)) {
        $options .=" <option value='".$espec->getId_especialidad()."'>".$espec->getNombre()."</option>";
    }
    return $options;
}

function comboEspecialistas($param) {
    $options = "";
    $serv = new Servicio();
    $detalleEspecialidad = $serv->listarDetalleEspecialidad();

    while ($det = array_shift($detalleEspecialidad)) {
        if ($det->getEspecialidad() == $param) {
            $esp = new EspecialistaMedico();
            $esp = $serv->retornarEspecialista2($det->getEspecialistaMedico());
            $options .=" <option value='".$esp->getRut_especialista()."'>".$esp->getNombres()." ".$esp->getApellido_paterno()." ". $esp->getApellido_materno()."</option>";
        }
    }
    return $options;
}

function comboEspecialidadSelected($param) {
    $options = "";
    $serv = new Servicio();
    $especialidades = $serv->listarEspecialidad();  //RETORNA UN ARREGLO

    while ($espec = array_shift($especialidades)) {
        if ($espec->getId_especialidad() == $param) {
            $options .=" <option selected value='".$espec->getId_especialidad()."'>".$espec->getNombre()."</option>";
        }
        else{
            $options .=" <option value='".$espec->getId_especialidad()."'>".$espec->getNombre()."</option>";
        }
    }
    return $options;
}

function obtenerHora(){
    date_default_timezone_set('America/Santiago');
    $date = new DateTime();
    $date->modify("+5 minutes");
    return $date->format("H:i");
}
