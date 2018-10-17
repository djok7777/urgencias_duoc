<?php
session_start();
include_once 'clases/Servicio.php';

$serv = new Servicio();
$detalleM = null;
$detalle_medicamentos = $serv->listarDetalleMedicamentos();

//Info de la receta (detalle_medicamento)
$medicamento = null;
$nombre = "";
$dosis = "";
$cantidad_dias ="";
$anotaciones = "";

$mensaje = "";
$mensaje2 = "";

if (isset($_POST["btnBuscar"])) {
    $rut = $_POST["txtRut"];
    $atencion = $serv->ultimaAtencionDePaciente($rut);
    
    if ($atencion == 0) {
        $mensaje = "No existen recetas médicas asociadas";
    }
    //Buscar detalle medicamento asociado a la última atencion
    else{
        while ($detM = array_shift($detalle_medicamentos)) {
            if ($detM->getAtencion() == $atencion) {
                $detalleM = $detM;
                $_SESSION["detalle"] = $detalleM;
            }
        }

        if ($detalleM != null && $detalleM->getEstado() == "PENDIENTE") {
            $mensaje = "Receta médica pendiente encontrada";
            //Obtener nombre del medicamento asociado
            $medicamentos = $serv->listarMedicamentos();
            while ($m = array_shift($medicamentos)) {
                if ($m->getId_medicamento() == $detalleM->getMedicamento()) {
                    $medicamento = $m;
                    $nombre = $medicamento->getNombre();
                }
            }
            $dosis = $detalleM->getDosis() . " mg";
            $cantidad_dias = $detalleM->getCantidad_dias(). " dias";
            $anotaciones = $detalleM->getAnotaciones();
        }
        else{
            $mensaje = "Se entregó última receta médica";
        }
    }
}

if (isset($_POST["btnConfirmar"])) {
    if (!isset($_SESSION["detalle"])) {
        $mensaje2 = "Ingresar rut con receta en estado pendiente porfavor";
    }
    else{
        $serv->actualizarEstadoDet_Med($detalleM->getAtencion(), $detalleM->getMedicamento());
        echo "<script>
        alert('Éxito en la operación, receta entregada');
        window.location.href='inicio.php';
        </script>";
    }
}



