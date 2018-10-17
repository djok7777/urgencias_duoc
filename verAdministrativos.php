<?php
include_once 'clases/PersonalAdministrativo.php';
include_once 'clases/EspecialistaMedico.php';
include_once 'clases/Farmaceutico.php';
include_once 'clases/Paciente.php';
include_once 'clases/Servicio.php';
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
} else {
    $u = $_SESSION["usuario"];
}
//medicos
$medicSer = new Servicio();
$medicos = $medicSer->listarEspecialistaMedico();
//Farmaceuticos
$farmSer = new Servicio();
$farmaceuticos = $farmSer->listarFarmaceutico();
//Pacientes
$paciSer = new Servicio();
$pacientes = $paciSer->listarPaciente();
//administradores
$admSer = new Servicio();
$administrativos = $admSer->listarAdministrador();
//$administrativos = $admSer->listarTodos();
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/Body.css" rel="stylesheet" type="text/css"/>

        <title></title>
    </head>
    <body>
        <?php include_once 'clases/menus3.php'; ?>
    <b2>Personal administrativo en el sistema:</b2>

    <table class="table">
        <thead class="thead-dark">
            <tr>

                <th scope="col">Rut</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellido paterno</th>
                <th scope="col">Apellido materno</th>
                <th scope="col">Nivel</th>
                <th scope="col" >Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>

        </thead>
        <tbody>
            <?php while ($admin = array_shift($administrativos)) { ?>
                <tr>
                    <th><?= $admin->getRut_personal_adm(); ?></th>
                    <th><?= $admin->getNombres(); ?></th>
                    <th><?= $admin->getApellido_paterno(); ?></th>
                    <th><?= $admin->getApellido_materno(); ?></th>
                    <th><?= $admSer->buscarNivel($admin->getNivel())->getNombre(); ?></th>
                    <th><a href="cargarAdmin.php?rut=<?= $admin->getRut_personal_adm(); ?>">Editar</a></th>
                    <th><a href="eliminarAdministrativo.php?rut=<?= $admin->getRut_personal_adm(); ?>">Eliminar</a></th>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    
    <b2>Personal Medico en el sistema:</b2>

    <table class="table">
        <thead class="thead-dark">
            <tr>

                <th scope="col">Rut</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellido paterno</th>
                <th scope="col">Apellido materno</th>
                <th scope="col">Nivel</th>
                <th scope="col" >Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>

        </thead>
        <tbody>
            <?php while ($medico = array_shift($medicos)) { ?>
                <tr>
                    <th><?= $medico->getRut_especialista(); ?></th>
                    <th><?= $medico->getNombres(); ?></th>
                    <th><?= $medico->getApellido_paterno(); ?></th>
                    <th><?= $medico->getApellido_materno(); ?></th>
                    <th><?= $medicSer->buscarNivel($medico->getNivel())->getNombre(); ?></th>
                    <th><a href="cargarMedico.php?rut=<?= $medico->getRut_especialista(); ?>">Editar</a></th>
                    <th><a href="eliminarMedico.php?rut=<?= $medico->getRut_especialista(); ?>">Eliminar</a></th>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    
    <b2>Personal Farmaceutico en el sistema:</b2>

    <table class="table">
        <thead class="thead-dark">
            <tr>

                <th scope="col">Rut</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellido paterno</th>
                <th scope="col">Apellido materno</th>
                <th scope="col">Nivel</th>
                <th scope="col" >Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>

        </thead>
        <tbody>
            <?php while ($farmaceutico = array_shift($farmaceuticos)) { ?>
                <tr>
                    <th><?= $farmaceutico->getRut_farmaceutico(); ?></th>
                    <th><?= $farmaceutico->getNombres(); ?></th>
                    <th><?= $farmaceutico->getApellido_paterno(); ?></th>
                    <th><?= $farmaceutico->getApellido_materno(); ?></th>
                    <th><?= $farmSer->buscarNivel($farmaceutico->getNivel())->getNombre(); ?></th>
                    <th><a href="cargarFarmaceutico.php?rut=<?= $farmaceutico->getRut_farmaceutico(); ?>">Editar</a></th>
                    <th><a href="eliminarFarmaceutico.php?rut=<?= $farmaceutico->getRut_farmaceutico(); ?>">Eliminar</a></th>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    
    <b2>Pacientes en el sistema:</b2>

    <table class="table">
        <thead class="thead-dark">
            <tr>

                <th scope="col">Rut</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellido paterno</th>
                <th scope="col">Apellido materno</th>
                <th scope="col">Domicilio</th>
                <th scope="col" >Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>

        </thead>
        <tbody>
            <?php while ($paciente = array_shift($pacientes)) { ?>
                <tr>
                    <th><?= $paciente->getRut_paciente(); ?></th>
                    <th><?= $paciente->getNombres(); ?></th>
                    <th><?= $paciente->getApellido_paterno(); ?></th>
                    <th><?= $paciente->getApellido_materno(); ?></th>
                    <th><?= $paciente->getDomicilio(); ?></th>
                    <th><a href="cargarPaciente.php?rut=<?= $paciente->getRut_paciente(); ?>">Editar</a></th>
                    <th><a href="eliminarPaciente.php?rut=<?= $paciente->getRut_paciente(); ?>">Eliminar</a></th>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</html>
