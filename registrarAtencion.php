<?php
include_once 'registrarAtencion2.php';
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
        PACIENTE:
        <br/>
        <form action="registrarAtencion.php" method="POST" class="form-horizontal">
            <input id="textinput" name="txtRutPac" type="text" placeholder="RUT" value="<?= $paciente->getRut_paciente(); ?>">
            <input type="submit" name="btnPaciente" value="Buscar"/>
            <br/>

            INFORMACIÓN DEL PACIENTE:
            <br/>
            <input id="textinput" name="txtNombres" type="text" placeholder="Nombres" value="<?= $paciente->getNombres(); ?>" disabled/>
            <input id="textinput" name="txtAPa" type="text" placeholder="Apellido Paterno" value="<?= $paciente->getApellido_paterno(); ?>" disabled/>
            <input id="textinput" name="txtAMa" type="text" placeholder="Apellido Materno" value="<?= $paciente->getApellido_materno(); ?>" disabled/><br>
            <input id="textinput" name="txtEdad" type="text" placeholder="Edad" value="<?= calcularEdad($paciente->getFecha_nacimiento()); ?>" disabled/><br>
            <input id="textinput" name="txtSexo" type="text" placeholder="Sexo" value="<?= imprimirSexo($paciente->getSexo()); ?>" disabled/><br>
            <input id="textinput" name="txtEstadoCivil" type="text" placeholder="Estado civil" value="<?= $paciente->getEstado_civil(); ?>" disabled/><br>
            <input id="textinput" name="txtDomicilio" type="text" placeholder="Domicilio" value="<?= $paciente->getDomicilio(); ?>" disabled/><br>
            <input id="textinput" name="txtGrupoSanguineo" type="text" placeholder="Grupo Sanguíneo" value="<?= $paciente->getGrupo_sanguineo(); ?>" disabled/><br>
            <input id="textinput" name="txtFono" type="text" placeholder="Fono" value="<?= $paciente->getFono(); ?>" disabled/>

            <br/>

            <hr>
            ACOMPAÑANTE:
            <br>
            <input id="textinput" name="txtRutAcomp" type="text" value="<?= $acompañante->getRut_acompañante(); ?>">
            <input type="submit" name="btnAcompañante" value="Buscar"/>
            <br/>

            INFORMACIÓN DEL ACOMPAÑANTE:
            <input id="textinput" name="txtAcNombres" type="text" placeholder="Nombres" value="<?= $acompañante->getNombres(); ?>" disabled/>
            <input id="textinput" name="txtAcAPa" type="text" placeholder="Apellido Paterno" value="<?= $acompañante->getApellido_paterno(); ?>" disabled/>
            <input id="textinput" name="txtAcAMa" type="text" placeholder="Apellido Materno" value="<?= $acompañante->getApellido_materno(); ?>" disabled/><br>
            <input id="textinput" name="txtAcParentesco" type="text" placeholder="Parentesco" value="<?= $acompañante->getGrado_parentesco(); ?>" disabled/><br>
            <input id="textinput" name="txtAcFono" type="text" placeholder="Fono" value="<?= $acompañante->getFono(); ?>" disabled/><br>

            <hr>
            NIVEL DE URGENCIA:
            <select name="selectUrgencia">
                <option value="ROJO">Rojo</option>
                <option value="AZUL">Azul</option>
            </select>

            <br/>

            <input type="submit" name="btnContinuar" value="Continuar"/>
        </form>
        <label> <?= $mensaje; ?> </label>
    </body>
</html>
