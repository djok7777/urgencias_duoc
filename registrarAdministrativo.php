<?php
include_once 'registrarAdministrativo2.php';
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
        <form action="registrarAdministrativo.php" method="POST" class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Registrar Operadores/Administradores</legend>

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
                        <input id="textinput" name="txtNombres" type="text" placeholder="Nombre" class="form-control input-md" required="">
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
                    <label class="col-md-4 control-label" for="titulo">Titulo</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtTitulo" type="text" placeholder="Titulo" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Telefono">Telefono</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtFono" type="number" placeholder="Telefono" class="form-control input-md" required="">

                    </div>
                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Password">Password</label>
                        <div class="col-md-4">
                            <input id="passwordinput" name="txtPassword" type="text" placeholder="Password" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nivel">Seleccionar Nivel</label>
                        <div class="col-md-4">
                            <select id="year" name="selectNivel" class="form-control">
                                <!--<?php// echo $comboniv; ?>-->
                                <option value="1">Administrador</option>
                                <option value="2">Operador administrativo</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <button type="submit" id="button1id" name="button1id" class="btn btn-success">Registrar</button>
                        </div>
                    </div>

            </fieldset>
        </form>
    </body>
</html>
