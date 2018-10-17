<?php
include_once 'clases/Servicio.php';
session_start();
//$_SESSION["usuario"] = $serv->autentificarEspecialista('11129630-8', '222');

$especialista = $_SESSION["usuario"];
if ($especialista->getNivel() != 3) {
    header("location: index.php");
}
else{ 
    $serv = new Servicio();
    $atencion = $serv->ultimaAtencion($especialista->getRut_especialista());
    if ($atencion != null) {
    $paciente = $serv->buscarPaciente($atencion->getRut_paciente());

    $nombrePac = $paciente->getNombres();
    $edadPac = calcularEdad($paciente->getFecha_nacimiento());
    $sexoPac = imprimirSexo($paciente->getSexo());
    $grupoSanguineo = $paciente->getGrupo_sanguineo();
    $mensaje="";
    $medicamentos = comboMedicamentos();
    
        if (isset($_POST["btnFinalizar"])) {
            $nro_atencion = $atencion->getNro_atencion();
            $sintomas = $_POST["taSintomas"];
            $diagnostico = $_POST["taDiagnostico"];
            $diasReposo = $_POST["diasReposo"];

            $serv->finalizarAtencion($nro_atencion, $sintomas, $diasReposo, $diagnostico);

            $id_medicamento = $_POST["selectMedicamentos"];
            if ($id_medicamento != 0) {
                $cantidad_dias = $_POST["diasMedicamento"];
                $anotaciones = "Administrar ".$_POST["horasMedicamento"]." veces al día";
                $dosis = $_POST["dosisMedicamento"];
                $serv->agregarDetalleMedicamento($nro_atencion, $id_medicamento, $dosis, $cantidad_dias, $anotaciones);
            }
            echo "<script>
            alert('Atención finalizada correctamente');
            window.location.href='atencion.php';
            </script>";
        }
    }else{
        echo "<script>
        alert('No posee más atenciones vigentes');
        window.location.href='inicio.php';
        </script>";
        $mensaje = "Sin atenciones vigentes";
    }

}



//FUNCIONES

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

function imprimirSexo($param) {
    if ($param == "M")
        return "Masculino";
    else if ($param == "F")
        return "Femenino";
    else
        return null;
}

function comboMedicamentos() {
    $options = "";
    $serv = new Servicio();
    $medicamentos = $serv->listarMedicamentos();
    
    $options = "<option value= '0'>Sin selección</option>";
    while ($med = array_shift($medicamentos)) {     
        $options .=" <option value='".$med->getId_medicamento()."'>". $med->getNombre() ."</option>";
    }
    return $options;
}