<?php
//include_once 'login2.php';
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
} else {
    $u = $_SESSION["usuario"];
}
$nivelP = $u->getNivel();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <ul class="menu cf">
            <?php
            if ($nivelP == 1) {
                echo '<li>
                <a href="">Registrar Funcionario</a>
                <ul class="submenu">
                    <li><a href="registrarFuncionario.php">Agregar Medico</a></li>
                    <li><a href="registrarAdministrativo.php">Agregar Administrador</a></li>
                    <li><a href="registrarFarmaceutico.php">Agregar Farmaceutico</a></li>
                    <li><a href="verAdministrativos.php">Ver administrativos</a></li>
                    <li><a href="registrarMedicamento.php">Agregar Medicamentos</a></li>

                </ul>         
            </li>';
            }
            ?>

            <?php
            if ($nivelP == 2) {
                echo '<li>
                    <a href = "">Registrar Ingreso</a>
                    <ul class = "submenu">
                        <li><a href = "registrarPaciente.php">Paciente</a></li>
                        <li><a href = "registrarAcompañante.php">Acompañante</a></li>
                    </ul>
                </li>';
            }
            ?>
             <?php
            if ($nivelP == 2) {
                echo '<li>
                    <a href = "">Registrar Atencion</a>
                    <ul class = "submenu">
                        <li><a href="registrarAtencion.php?varname=0">Registrar nueva atención</a></li>
                        <li><a href="registrarAtencion.php">Continuar registro</a></li>
                    </ul>
                </li>';
            }
            ?>
            
            <?php
            if ($nivelP == 3 || $nivelP == 4 || $nivelP == 5) {
                echo '<li>
                    <a href = "">Registrar Atencion</a>
                    <ul class = "submenu">
                        <li><a href="atencion.php">Realizar atención</a></li>
                    </ul>
                </li>';
            }
            ?>
            
            
            <?php
            if($nivelP == 6){
                echo '<li>
                    <a href = "">Farmacia</a>
                    <ul class = "submenu">
                        <li><a href="farmacia.php">Administrar farmacia</a></li>
                    </ul>
                </li>';
                }
            ?>


            <li>
                <a href = "">ADMIN</a>
                <ul class = "submenu">
                    <li><a href = "Administrador.php">ADMIN</a></li>
                </ul>
            </li>
            <li><a href = "logout.php">Cerrar Sesion</a></li>

        </ul>
    </body>
</html>
