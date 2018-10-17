<?php
include_once 'login2.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <link href="css/Body.css" rel="stylesheet" type="text/css"/>

        <title></title>

    </head>
    <body>
        <?php include_once 'clases/menus2.php'; ?><br>
        <br>





        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 col-md-3">
                    <div class="form-login">
                        <form action="login.php" method="POST">
                            <h4>Iniciar Sesion</h4>
                            <input type="text" class="form-control input-sm chat-input" placeholder="Rut" name="txtRut"/>
                            </br>
                            <input type="password" class="form-control input-sm chat-input" placeholder="Password" name="txtPassword" />
                            </br>
                            <!--
                            <div class="wrapper">
                                <span class="group-btn">     
                                    <a href="#" class="btn btn-primary btn-md">Iniciar Sesion<i class="fa fa-sign-in"></i></a>
                                </span>
                            </div>
                            -->
                            <input type="submit" class="btn btn-success" value="Iniciar sesión" class="boton"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
