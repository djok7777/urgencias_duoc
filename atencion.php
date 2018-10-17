<?php
include_once 'atencion2.php';
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
} else {
    $u = $_SESSION["usuario"];
}
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
        <hr>
        ATENCIÓN EN CURSO
        <hr/>
        <form action="atencion.php" method="POST" class="form-horizontal">

            DATOS DEL PACIENTE:
            <br/><br/>
            NOMBRE:
            <br/>
            <input type="text" name="nombreP" value="<?=$nombrePac;?>" disabled="true"/>
            <br/>
            
            EDAD:
            <br/>
            <input type="text" name="edadP" value="<?=$edadPac;?>" disabled="true"/>
            <br/>
            
            SEXO:
            <br/>
            <input type="text" name="sexoP" value="<?=$sexoPac;?>" disabled="true"/>
            <br/>
            
            GRUPO SANGUINEO:
            <br/>
            <input type="text" name="grupoSanP" value="<?=$grupoSanguineo;?>" disabled="true"/>
            <br/>
            
            <hr>
            DATOS DE LA ATENCIÓN:
            <hr>
            
            SINTOMAS:
            <br/>
            <textarea name="taSintomas" rows="4" cols="50" required>
            
            </textarea>
            
            <br/>
            DIAS DE REPOSO:
            <br/>
            <input type="text" name="diasReposo" required/>
            <h6>Si no posee ingresar 0</h6>
            <br/>
            
            DIAGNÓSTICO:
            <br/>
            <textarea name="taDiagnostico" rows="4" cols="50">
            
            </textarea>
            
            <hr>
            MEDICAMENTO:
            <hr>
            
            <select name="selectMedicamentos">
                <?=$medicamentos;?>
            </select>
            <h5>Si no prescribirá medicamento escoger : "Sin selección"</h5>
            <br/><br/>
            CONSUMIR DOSIS DE
            <input type="text" name="dosisMedicamento" style="width:50px;"/>
            <br/>
            
            <br/><br/>
            ADMINISTRAR POR
            <input type="text" name="diasMedicamento" style="width:50px;"/>
            DÍAS
            <br/>
            
            <br/>
            ADMINISTRAR CADA 
            <input type="text" name="horasMedicamento" style="width:50px;"/>
            HORAS
            <br/>
            
            <br/>
            <input type="submit" name="btnFinalizar" value="Finalizar"/>
            <?=$mensaje;?>
        </form>
    </body>
</html>
