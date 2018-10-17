<?php
include_once 'registrarAtencionContinuar2.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="css/Body.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="margin: 50px 150px;">
        <?php include_once 'clases/menus.php'; ?>
        REGISTRAR ATENCIÓN:

        <hr/>
        <br/>
        <form action="registrarAtencionContinuar.php" method="POST" class="form-horizontal">

            SELECCIONAR ESPECIALIDAD:
            <br/><br/>
            <select name="selectEspecialidad" onchange="this.form.submit()">
                <?=$especialidades;?>
            </select>
            <br/><br/><br/>
            
            SELECCIONAR ESPECIALISTA:
            <br/><br/>
            <select name="selectEspecialistasMedicos">
                <?=$especialistasMedicos;?>
            </select>
            <br/><br/><br/>

            <hr>
            HORA DISPONIBLE:<br/><br/>
            <input type="text" name="textHoraDisponible" value="<?=$horaDisponible;?>"/>
            <br/>

            <hr>

            <input type="submit" name="btnRegistrar" value="Registrar"/>
            <?=$mensaje;?>
        </form>
    </body>
</html>