<?php
include_once 'clases/Servicio.php';
session_start();
if (isset($_SESSION["usuario"])) {
    $servicio = new Servicio();
    $paciModificar = $_SESSION["paciModificar"];
    include_once 'editarPaciente.php';
    if (isset($_GET["e"])) {
        $mensaje = "Error al registrar Paciente";
    }
} else {
    header("location: index.php#login");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/Body.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include_once 'clases/menus3.php'; ?>
        <form class="form-horizontal" action="modificarPaciente.php" method="POST">
            <fieldset>

                <!-- Form Name -->
                <legend>Editar Pacientes</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Rut</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $paciModificar->getRut_paciente(); ?>" disabled  id="rut" name="rut" required >

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $paciModificar->getNombres(); ?>" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Apellido Paterno</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $paciModificar->getApellido_paterno(); ?>" id="paterno" name="paterno" placeholder="Apellido Paterno" required>

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Apellido Materno</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $paciModificar->getApellido_materno(); ?>" id="materno" name="materno" placeholder="Apellido Materno" required>

                    </div>
                </div>

                <!-- Password input-->
                

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Sexo</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $paciModificar->getSexo(); ?>" id="sexo" name="sexo" placeholder="sexo" disabled>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Estado Civil</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $paciModificar->getEstado_civil(); ?>" id="estado_civil" name="estado_civil" placeholder="estado_civil" required>

                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Domicilio</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $paciModificar->getDomicilio(); ?>" id="domicilio" name="domicilio" placeholder="domicilio" required>

                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Grupo Sanguineo</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $paciModificar->getGrupo_sanguineo(); ?>" id="grupo_sanguineo" name="grupo_sanguineo" placeholder="grupo_sanguineo" required>

                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Fono</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $paciModificar->getFono(); ?>" id="fono" name="fono" placeholder="fono" required>

                    </div>
                </div>
                <!-- Button (Double) -->
                <div class="form-group">
                    <div class="col-md-8">
                        <button type="submit" id="button1id" name="button1id" class="btn btn-success">Registrar</button>
                        <label class="text-success"><?= $mensaje; ?></label>
                    </div>
                </div>

            </fieldset>
        </form>
    </body>
</html>
