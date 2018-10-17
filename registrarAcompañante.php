<?php
include_once 'registrarAcompañante2.php';
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
} else {
    $u = $_SESSION["usuario"];
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="css/Body.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include_once 'clases/menus3.php'; ?>
        <form class="form-horizontal" action="registrarAcompañante.php" method="POST">
            <fieldset>

                <!-- Form Name -->
                <legend>Registrar Acompañante</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput" name="txt">Rut</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="txtRut" type="text" placeholder="Rut" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="txtNombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Apellido Paterno</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="txtAPa" type="text" placeholder="Apellido Paterno" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Apellido Materno</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="txtAMa" type="text" placeholder="Apellido Materno" class="form-control input-md" required="">

                    </div>
                </div>
                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Grado Parentesco</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtGrado" type="text" placeholder="Parentesco" class="form-control input-md" required="">

                    </div>
                </div>
                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Telefono</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtFono" type="number" placeholder="Telefono" class="form-control input-md" required="">

                    </div>
                </div>
                <!-- Button (Double) -->
                <div class="form-group">
                    <div class="col-md-8">
                        <button id="button1id" name="button1id" class="btn btn-success">Registrar</button>

                    </div>
                </div>

            </fieldset>
        </form>
    </body>
</html>
