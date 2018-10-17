<?php
include_once 'clases/Servicio.php';
session_start();
if (isset($_SESSION["usuario"])) {
    $servicio = new Servicio();
    $niveles = $servicio->listarNivel();
    $adminModificar = $_SESSION["adminModificar"];
    include_once 'editarAdministrador.php';
    if (isset($_GET["e"])) {
        $mensaje = "Error al registrar Administrador";
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
        <form class="form-horizontal" action="modificarAdministrador.php" method="POST">
            <fieldset>

                <!-- Form Name -->
                <legend>Registrar Medico</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Rut</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $adminModificar->getRut_personal_adm(); ?>" disabled  id="rut" name="rut" required >

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $adminModificar->getNombres(); ?>" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Apellido Paterno</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $adminModificar->getApellido_paterno(); ?>" id="paterno" name="paterno" placeholder="Apellido Paterno" required>

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Apellido Materno</label>  
                    <div class="col-md-4">
                        <input type="text" value="<?= $adminModificar->getApellido_materno(); ?>" id="materno" name="materno" placeholder="Apellido Materno" required>

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Titulo</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $adminModificar->getTitulo(); ?>" id="titulo" name="titulo" placeholder="Titulo" required>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Fono</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $adminModificar->getFono(); ?>" id="fono" name="fono" placeholder="Fono" required>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Password</label>
                    <div class="col-md-4">
                        <input type="text" value="<?= $adminModificar->getPassword(); ?>" id="password" name="password" placeholder="Password" required>

                    </div>
                </div>
                <!-- Select Basic -->
                <div class="form-group">
                    <select class="form-control" id="nivel" name="idnivel" style="width: 200px">
                        <?php while ($nivel = array_shift($niveles)) {
                            ?>

                            <?=
                            $idNiv = $nivel->getId_nivel();
                            $Niv = $adminModificar->getNivel();
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
