<?php
include_once 'clases/PersonalAdministrativo.php';
include_once 'clases/Farmaceutico.php';
include_once 'clases/EspecialistaMedico.php';
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
    </body>
</html>
