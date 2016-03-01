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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <link href="css/style.css" type="text/css" rel="stylesheet" >
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--
<script>
function pasarfase1(){
document.getElementById('fase1');
}
</script>
-->
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
                        <img style="width:50%;" src="img/Nuevo/logo.png">
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
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="img/Nuevo/cztweb.png" class="responsive-img" style="height:auto;"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Preguntas-->
        <div class="row">
            <div class="col s1 offset-s2"><img src="img/Nuevo/numero1.png" alt="" class="responsive-img"></div>
            <div class="col s4"><h5 class="left-align">¿Oportunidad, problema o necesidad?</h5></div>
        </div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#fase0"></a></li>
                    <li class="tab col s3"><a href="#fase1"></a></li>
                    <li class="tab col s3"><a href="#fase2"></a></li>
                </ul>
            </div>
            <div id="fase0" class="col s12">
                <div class="col s6 m8 l8 offset-s3 offset-m2 offset-l2">
                    <div class="card-panel purple lighten-4 hoverable">
                        <div class="row">
                            <h5>El desarrollo de una idea de negocio, sea un producto o servicio, requiere identificar el punto de entrada al mercado. Si no tienes esto claro, empieza considerando qué lograría tu producto o servicio: ¿resolver algún problema? ¿Aprovechar una oportunidad? ¿Satisfacer una necesidad?
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <div class="card-action">
                                    <a href="fase0.php">_</a>
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="card-action">
                                    <a id="irfase1" href="#fase1"><p class="right-align">Siguiente</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-card">
                            <div class="row">
                                <div class="col s12">
                                    <br>
                                    <br>
                                    <img src="img/Nuevo/pasos-ruta01.png" class="responsive-img">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3"><p>Oportunidad, problema, Solución</p></div>
                                <div class="col s3 "><p></p></div>
                                <div class="col s3 "><p></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fase1" class="col s12">
                <div class="col s6 m8 l8 offset-s3 offset-m2 offset-l2">
                    <div class="card-panel purple lighten-4 hoverable">
                        <div class="row">
                            <h5>Ten en cuenta que las <b>oportunidades</b> están estrechamente relacionadas el potencial de país, con las tecnologías emergentes, entre otros, mientras que los <b>problemas</b> y las <b>necesidades</b> tienen que ver con aquellos productos o servicios que logran aliviar algún “dolor” (entendiendo ésto como algo que resulta molesto o que podría ser objeto de mejora y por lo que estarían dispuestos a pagar para sentirse mejor) en tus clientes.</h5>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <div class="card-action">
                                    <a href="fase0.php">Anterior</a>
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="card-action">
                                    <a id="siguiente"><p class="right-align">Siguiente</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-card">
                            <div class="row">
                                <div class="col s12">
                                    <br>
                                    <br>
                                    <img src="img/Nuevo/pasos-ruta01.png" class="responsive-img">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3"><p>Oportunidad, problema, Solución</p></div>
                                <div class="col s3 "><p></p></div>
                                <div class="col s3 "><p></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fase2" class="col s12">
                <div class="col s6 m8 l8 offset-s3 offset-m2 offset-l2">
                    <div class="card-panel yellow lighten-1 hoverable">
                        <div class="row">
                            <h6>¿Ya lo tienes claro? Indica qué fue lo que identificaste.</h6>
                            <form action="php/insert_pregunta.php" method="post"  class="col s12">
                                <p>
                                    <input checked='<?php if( $respuesta0=='problema'){ echo true;} ?>' class="with-gap"  type="radio"  name="fase0" id="test1" value="problema" />
                                    <label for="test1">Problema</label>
                                </p>
                                <p>
                                    <input class="with-gap"  type="radio"  name="fase0" id="test2" value="oportunidad"  />
                                    <label for="test2">Oportunidad</label>
                                </p>
                                <p>
                                    <input class="with-gap"  type="radio"   name="fase0" id="test3" value="necesidad"  />
                                    <label for="test3">Necesidad</label>
                                </p>
                                <br>

                                <h5>Ahora escribe en una frase cuál es ese problema, oportunidad o necesidad. Esta información estará visible durante toda la ruta para que no pierdas el foco y recuerdes en todo momento qué es lo que estás intentando solucionar, aprovechar o satisfacer.
                                </h5>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="icon_prefix" type="text"  value='<?php echo $respuesta1; ?>' name="rta1" length="144">
                                    </div>
                                </div>
                                <div class="center-align">
                                    <button action="fase1.php" class="btn red white-text waves-effect waves-light"  type="submit" name="sub_preg_1">
                                        <i class="material-icons">save</i>Guardar
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <div class="card-action">
                                    <a href="fase0.php"></a>
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="card-action">
                                    <a id="siguiente"><p class="right-align">Siguiente</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-card">
                            <div class="row">
                                <div class="col s12">
                                    <br>
                                    <br>
                                    <img src="img/Nuevo/pasos-ruta02.png" class="responsive-img">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3"><p>Oportunidad, problema, Solución</p></div>
                                <div class="col s3 "><p></p></div>
                                <div class="col s3 "><p></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.modal-trigger').leanModal();
                $('ul.tabs').tabs();
            });
            $('.collapsible').collapsible({
                accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
            $('.slider').slider({height: 150});
            
            $("#irfase1").click(function(){
                $('ul.tabs').tabs('select_tab', 'fase1');
            });
        </script>

    </body>
</html>