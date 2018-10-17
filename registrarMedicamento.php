
<?php 
include_once 'registrarMedicamento2.php'; 
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
        <title></title>
    </head>
    <body>
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
            <form class="form-horizontal" action="registrarMedicamento.php" method="POST">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Registrar Medicamento</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput" name="txt">ID</label>  
                        <div class="col-md-4">
                            <input id="textinput" name="txtID" type="number" placeholder="ID" class="form-control input-md" required="">
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput" name="txt">Nombre</label>  
                        <div class="col-md-4">
                            <input id="textinput" name="txtNombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Descripcion</label>  
                        <div class="col-md-4">
                            <input id="textinput" name="txtDescripcion" type="text" placeholder="Descripcion" class="form-control input-md" required="">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Fecha Caducidad</label>  
                        <div class="col-md-4">
                            <input id="textinput" name="txtCaducidad" type="text" placeholder="Fecha Caducidad" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Contraindicaciones</label>  
                        <div class="col-md-4">
                            <input id="textinput" name="txtContra" type="text" placeholder="Contraindicaciones" class="form-control input-md" required="">

                        </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="titulo">Stock</label>
                        <div class="col-md-4">
                            <input id="passwordinput" name="txtStock" type="number" placeholder="Stock" class="form-control input-md" required="">

                        </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Telefono">Proveedor</label>
                        <div class="col-md-4">
                            <input id="passwordinput" name="txtProveedor" type="text" placeholder="Proveedor" class="form-control input-md" required="">

                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <div class="col-md-8">
                            <button id="button1id" type="submit" name="button1id" class="btn btn-success">Registrar</button>

                        </div>
                    </div>

                </fieldset>
            </form>

            <label> <?= $mensaje; ?> </label>
        </body>
    </html>

</body>
</html>
