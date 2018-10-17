<?php
include_once 'farmacia2.php';
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
        <?php //include_once 'clases/menus3.php'; ?>
        <form class="form-horizontal" action="farmacia.php" method="POST">
            <fieldset>

                <!-- Form Name -->
                <legend>Administración de farmacia</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput" name="txt">Rut</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="txtRut" type="text" placeholder="Rut" class="form-control input-md">
                        <div class="col-md-12">
                            <?=$mensaje;?>
                        </div>
                        <button id="button1id" name="btnBuscar" class="btn btn-success">Buscar</button>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="textinput" name="txt">Medicamento</label>
                        <div class="col-md-4">
                            <input id="textinput" name="txtMedicamento" type="text" value="<?=$nombre;?>" disabled="true" class="form-control input-md">
                        </div>
                        <label class="col-md-4 control-label" for="textinput" name="txt">Dosis a suministrar</label>
                        <div class="col-md-4">
                            <input id="textinput" name="txtDosis" type="text" value="<?=$dosis;?>" disabled="true" class="form-control input-md">
                        </div>
                        <label class="col-md-4 control-label" for="textinput" name="txt">Consumo en días</label>
                        <div class="col-md-4">
                            <input id="textinput" name="txtCantidadDias" type="text" value="<?=$cantidad_dias;?>" disabled="true" class="form-control input-md">
                        </div>
                        <label class="col-md-4 control-label" for="textinput" name="txt">Anotaciones</label>
                        <div class="col-md-4">
                            <input id="textinput" name="txtAnotaciones" type="text" value="<?=$anotaciones;?>" disabled="true" class="form-control input-md">
                        </div>
                        <button id="button1id" name="btnConfirmar" class="btn btn-success">Confirmar entrega</button>
                        <?=$mensaje2;?>
                    </div>
                </div>
            </fieldset>
        </form>
    </body>
</html>
