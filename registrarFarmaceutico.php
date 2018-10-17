<?php 
include_once 'registrarFarmaceutico2.php'; 
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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
        <form class="form-horizontal" action="registrarFarmaceutico.php" method="POST">
            <fieldset>

                <!-- Form Name -->
                <legend>Registrar Farmaceutico</legend>

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
                    <label class="col-md-4 control-label" for="txtFecha">Hora de Inicio</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtHoraIni" type="number" placeholder="Hora de Inicio" class="form-control input-md" required="" min="0000" max="2359">
                        <h6>Ingrese valor entre 0 y 2359</h6>
                    </div>
                </div>     

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txtFecha">Hora de Termino</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtHoraTer" type="number" placeholder="Hora de Termino" class="form-control input-md" required="" min="0000" max="2359">
                        <h6>Ingrese valor entre 0 y 2359</h6>
                    </div>
                </div>  


                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="txtPassword">password</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="txtPassword" type="password" placeholder="password" class="form-control input-md" required="">

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