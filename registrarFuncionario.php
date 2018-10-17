<?php
include_once 'ValidarEspecialista.php';
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
} else {
    $u = $_SESSION["usuario"];
}
$servicio = new Servicio();
$niveles = $servicio->listarNivel();
$mensaje = "";
?>
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
        <label> <?= $mensaje; ?> </label>
        <form class="form-horizontal" action="registrarFuncionario.php" method="POST">
            <fieldset>

                <!-- Form Name -->
                <legend>Registrar Medico</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Rut</label>  
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
                    <label class="col-md-4 control-label" for="textinput">Telefono</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtFono" type="number" placeholder="Telefono" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Hora de Inicio</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtHoraI" type="number" placeholder="HoraInicio" class="form-control input-md" required="" min="0" max="2359">
                        <h6>Ingrese valor entre 0 y 2359</h6>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Hora de Termino</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtHoraT" type="number" placeholder="HoraTermino" class="form-control input-md" required="" min="0" max="2359">
                        <h6>Ingrese valor entre 0 y 2359</h6>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Sector</label>
                    <div class="col-md-4">
                    <select class="form-control" id="sector" name="idSector" style="width: 200px">
                        <option value="ROJO">ROJO</option>
                        <option value="AZUL">AZUL</option>
                    </select>

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Contraseña</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtPassword" type="password" placeholder="Password" class="form-control input-md" required="">

                    </div>
                </div>
                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Seleccionar Nivel</label>
                    <select class="form-control" id="nivel" name="idnivel" style="width: 200px">
                            <option value="0">Seleccione Nivel</option>
                            <option value="3">MÉDICO</option>
                            <option value="4">ENFERMERO</option>
                            <option value="5">PARAMÉDICO</option>
                    </select>
                </div>
                <!-- Button (Double) -->
                <div class="form-group">
                    <div class="col-md-8">
                        <button type="submit" id="button1id" name="button1id" class="btn btn-success">Registrar</button>

                    </div>
                </div>

            </fieldset>
        </form>

        <label> <?= $mensaje; ?> </label>
    </body>
</html>
