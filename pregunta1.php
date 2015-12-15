<!DOCTYPE html>
<?php
include ("php/registro.php");
include ("php/rutaAlpha.php");
//include ("php/insert_pregunta.php");
$respuesta1="";
$respuesta2="";
$mysqli =new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}
$mysqli->set_charset("utf8");
$usuario= $_SESSION["usuario"];

$select= "SELECT descripcion FROM repuestas where preg_id = 1 and usuario_id = '".$usuario."';";
$result = mysqli_query($mysqli, $select);
$row = mysqli_fetch_array($result); 
$respuesta1 = $row["descripcion"];

$select= "SELECT descripcion FROM repuestas where preg_id = 2 and usuario_id = '".$usuario."';";
$result = mysqli_query($mysqli, $select);
$row = mysqli_fetch_array($result); 
$respuesta2 = $row["descripcion"];
if(empty($_SESSION["usuario"]))
{

    echo "<script>alert('Debes registrarte para poder acceder')</script>";
    header("Location: index.php");
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <meta name="theme-color" content="#2196F3">
        <title>Venturas platform</title>

        <!-- CSS  -->
        <link href="css/materialize.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet" >
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="js/modernizr.js"></script> <!-- Modernizr -->
        <script>
            function pasarfase1(){
                document.getElementById('fase1');
            }
        </script>
    </head>
    <body>
        <!-- Pre Loader -->
        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>

        <!--Navigation-->
        <div class="navbar-fixed">
            <nav id="nav_f" class="default_color" role="navigation">
                <div class="container">
                    <div class="nav-wrapper"><a id="logo-container" href="index.php" class="brand-logo">
                        <img style="width:50px;" src="img/LOGO/V-azulCl.svg">
                        </a>
                        <ul id="nav-mobile" class="right side-nav">
                            <li><a href="index.php">Noticias</a></li>
                            <li><a href="index.php#contact">CONTACTO</a></li>
                            <li><a href="index.php?action=callfunction"><i class="material-icons">power_settings_new</i></a></li>
                        </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">
            <h2 class="center-align">Ruta Modelo de negocio <b>VENTURAS</b></h2>
            <h6>Generar tu modelo de negocio es un paso importante. Sin embargo, hay elementos clave que, más que llenar un formato, te permitirán reflexionar sobre tu iniciativa para mejorarla. ¿No entiendes mucho sobre modelos? ¡No te preocupes! Esta ruta te ofrecerá toda una serie de ayudas y ejemplos para que logres avanzar, y de paso hacerte preguntas que serán fundamentales en la evolución de tu idea de negocio.</h6>
            <br>
            <ul class="collection">
                <li class="collection-item avatar">
                    <a href="fase0.php">
                        <img src="img/favicon.ico" alt="" class="circle">
                        <span class="title">¿Oportunidad, problema o necesidad?</span>
                    </a>
                </li>
                <li class="collection-item avatar">
                    <img src="img/favicon.ico" alt="" class="circle">
                    <span class="title">Clientes</span>
                </li>
                <li class="collection-item avatar">
                    <img src="img/favicon.ico" alt="" class="circle">
                    <span class="title">Mercado</span>
                </li>
                <li class="collection-item avatar">
                    <img src="img/favicon.ico" alt="" class="circle">
                    <span class="title">Propuesta de valor</span>
                </li>
            </ul>            
        </div>



        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>
            $(document).ready(function(){
                $('.modal-trigger').leanModal();
                $('ul.tabs').tabs();
            });
            $('.collapsible').collapsible({
                accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
        </script>

    </body>
</html>