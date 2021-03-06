
<?php 
include_once 'registrarPaciente2.php'; 
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
} else {
    $u = $_SESSION["usuario"];
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="css/chk.css" rel="stylesheet" type="text/css"/>
        <link href="css/Body.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include_once 'clases/menus3.php'; ?>
        <form class="form-horizontal" action="registrarPaciente.php" method="POST">
            <fieldset>

                <!-- Form Name -->
                <legend>Registrar Persona</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput" name="txt">Rut</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="txtRut" type="text" placeholder="Rut" class="form-control input-md" required="" >

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
                    <label class="col-md-4 control-label" for="txtFecha">Fecha de Nacimiento</label>
                    <div class="col-md-4">
                        <input value="" id="passwordinput" name="txtFecha" type="text" placeholder="Fecha de Nacimiento" class="form-control input-md" required="" pattern="\d{1,2}/\d{1,2}/\d{4}">
                        <label style='color:gray;' class="col-md-12 control-label" for="avisoFecha">Fecha en formato 'dd/mm/yyyy'</label>
                    </div>
                </div><br>
                <label for="txtFecha">Genero</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="mismo" id="inlineRadio1" value="f">
                    <label class="form-check-label" for="inlineRadio1">Femenino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="mismo" id="inlineRadio2" value="m">
                    <label class="form-check-label" for="inlineRadio2">Masculino</label>
                </div><br>
                <br>

                <label >Estado Civil</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="estado" id="inlineRadio1" value="s">
                    <label class="form-check-label" for="inlineRadio1">Soltero</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="estado" id="inlineRadio2" value="c">
                    <label class="form-check-label" for="inlineRadio2">Casado</label>
                </div><br>
                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txtDomicilio">Domicilio</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtDomicilio" type="text" placeholder="Domicilio" class="form-control input-md" required="">

                    </div>
                </div>
                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txtGrupo">Grupo Sanguineo</label>
                    <div class="col-md-4">
                        <select name="selectSanguineo" required>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </div>
                </div>
                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txtFono">Telefono</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtFono" type="text" placeholder="Telefono" class="form-control input-md" required="">

                    </div>
                </div>
                <!-- Button (Double) -->
                <div class="form-group">
                    <div class="col-md-8">
                        <button id="button1id" name="button1id" class="btn btn-success" type="submit" >Registrar</button>

                    </div>
                </div>

            </fieldset>
        </form>
        <label> <?= $mensaje; ?> </label>
    </body>
</html>
