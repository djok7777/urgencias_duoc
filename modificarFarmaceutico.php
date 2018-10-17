<?php
include_once 'clases/Servicio.php';
session_start();
if (isset($_SESSION["usuario"])) {
    $servicio = new Servicio();
    $niveles = $servicio->listarNivel();
    $farmacModificar = $_SESSION["farmacModificar"];
    include_once 'editarFarmaceutico.php';
    if (isset($_GET["e"])) {
        $mensaje = "Error al registrar Farmaceutico";
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
        <form class="form-horizontal" action="modificarFarmaceutico.php" method="POST">
            <fieldset>

                <!-- Form Name -->
                <legend>Editar Farmaceuticos</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Rut</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $farmacModificar->getRut_farmaceutico(); ?>" disabled  id="rut" name="rut" required >

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $farmacModificar->getNombres(); ?>" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Apellido Paterno</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $farmacModificar->getApellido_paterno(); ?>" id="paterno" name="paterno" placeholder="Apellido Paterno" required>

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Apellido Materno</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $farmacModificar->getApellido_materno(); ?>" id="materno" name="materno" placeholder="Apellido Materno" required>

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Hola De Inicio</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $farmacModificar->getHora_inicio(); ?>" id="hora_inicio" name="hora_inicio" placeholder="hora_inicio" required>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Hola De Termino</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $farmacModificar->getHora_termino(); ?>" id="hora_termino" name="hora_termino" placeholder="hora_termino" required>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Password</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $farmacModificar->getPassword(); ?>" id="password" name="password" placeholder="Password" required>

                    </div>
                </div>
                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Nivel</label>
                    <br/>
                    <select class="form-control" id="nivel" name="idnivel" style="width: 200px">
                        <?php while ($nivel = array_shift($niveles)) {
                            ?>

                            <?=
                            $idNiv = $nivel->getId_nivel();
                            $Niv = $farmacModificar->getNivel();
                            if ($idNiv === $Niv) {
                                ?><option selected value="<?= $nivel->getId_nivel(); ?>"><?= $nivel->getNombre(); ?></option>
                            <?php } else {
                                ?><option value="<?= $nivel->getId_nivel(); ?>"><?= $nivel->getNombre(); ?></option>   
                                <?php
                            }
                        }
                        ?>
                    </select>
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
