<!DOCTYPE html>
<?php
include ("php/registro.php");
include ("php/rutaAlpha.php");
//include ("php/insert_pregunta.php");
$respuesta3="";
$mysqli =new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}
$mysqli->set_charset("utf8");
$usuario= $_SESSION["usuario"];

$select= "SELECT descripcion FROM repuestas where preg_id = 3 and usuario_id = '".$usuario."';";
$result = mysqli_query($mysqli, $select);
$row = mysqli_fetch_array($result); 
$respuesta3 = $row["descripcion"];
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
            <div class="col s1 offset-s2"><img src="img/Nuevo/numero3.png" alt="" class="responsive-img"></div>
            <div class="col s4"><h5 class="left-align">Clientes: Propuesta de valor</h5></div>
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
                            <h5>
                                Ya estableciste qué siente y piensa tu cliente con respecto a la problemática que identificaste.
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
                                <div class="col s3 "><p>Dolor</p></div>
                                <div class="col s3 "><p>Propuesta de Valor</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fase1" class="col s12">
                <div class="col s6 m8 l8 offset-s3 offset-m2 offset-l2">
                    <div class="card-panel purple lighten-4 hoverable">
                        <div class="row">
                            <h5>Ahora debes investigar qué es lo que ellos ven actualmente en su entorno, enfocándote no sólo en la situación o necesidad que quieres resolver, sino en aquellos productos o servicios que ya existen para mitigar ese “dolor” de tu cliente, es decir, conocer la oferta del mercado.</h5>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <div class="card-action">
                                    <a id="irfase0" href="fase0.php">Anterior</a>
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="card-action">
                                    <a id="irfase2"><p class="right-align">Siguiente</p></a>
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
                                <div class="col s3 "><p>Dolor</p></div>
                                <div class="col s3 "><p>Propuesta de Valor</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fase2" class="col s12">
                <div class="col s6 m8 l8 offset-s3 offset-m2 offset-l2">
                    <div class="card-panel yellow lighten-1 hoverable">
                        <div class="row">
                            <h6>
                                ¿Qué ve tu cliente en su entorno con respecto al problema o necesidad que identificaste y a lo que ya le ofrece el mercado?

                            </h6>
                            <form action="php/insert_pregunta.php" method="post" class="col s12">

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="icon_prefix" type="text"  value='<?php echo $respuesta3; ?>' name="rta3">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6">
                                        <div class="card-action">
                                            <a id="irfase1" href="fase0.php">Anterior</a>
                                        </div>
                                    </div>
                                    <div class="col s6 center-align">
                                        <button action="fase3.php" class="btn red white-text waves-effect waves-light"  type="submit" name="sub_preg_3">
                                            <i class="material-icons">save</i>Guardar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="footer-card">
                            <div class="row">
                                <div class="col s12">
                                    <br>
                                    <br>
                                    <img src="img/Nuevo/pasos-ruta03.png" class="responsive-img">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3"><p>Oportunidad, problema, Solución</p></div>
                                <div class="col s3 "><p>Dolor</p></div>
                                <div class="col s3 "><p>Propuesta de Valor</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ayudas-->

        <!-- Modal Structure -->

        <div id="modal1" class="modal white">
            <div class="modal-content">
                <h1>Ayuda</h1>
                <h5>Piensa qué es lo que realmente le importa a tu cliente. ¿Cuáles son sus principales preocupaciones con respecto a ese problema o necesidad que identificaste? ¿Qué inquietudes y aspiraciones tiene? Recuerda que para responder a ello debes conocerlo muy bien. Por eso te sugerimos escucharlo, investigar un poco sobre su realidad, observarlo y estar muy atento a su comportamiento.</h5>

            </div>
        </div>
        <div id="modal2" class="modal white">
            <div class="modal-content">
                <h1>Ejemplo</h1>
                <h5>La empresa XXX ha desarrollado un software para los community managers (encargados de las estrategias de mercadeo en redes sociales), ésta les facilita implementar las estrategias y rastrear sus resultados para tomar decisiones a tiempo.</h5>
                <h5>¿Qué piensan y sienten sus clientes? Acercándose a varias personas que laboran en ello, se encuentra que: Muchos no están obteniendo buenos resultados porque no saben cómo medir el impacto de las estrategias implementadas. ¿Cómo pueden obtener los datos para analizarlos? Adicionalmente, sienten que es una tarea que les toma mucho tiempo y que procesar toda la información de manera manual complica la tarea.</h5>

            </div>
        </div>
        <div id="modal3" class="modal white">
            <div class="modal-content">
                <h1>Ayuda</h1>
                <h5>Pregúntate lo siguiente:</h5>
                <ul>
                    <li>¿Qué productos o servicios intentan actualmente resolver el problema de tu cliente?</li>
                    <li>¿Qué aspecto o características tienen?
                    </li>
                    <li>¿En dónde los pueden conseguir/comprar?
                    </li>
                    <li> ¿Quiénes de sus amigos los usan?</li>
                    <li>¿A qué tipo de ofertas está expuesto normalmente?</li>
                </ul>

            </div>
        </div>
        <div id="modal4" class="modal white">
            <div class="modal-content">
                <h1>Ejemplo</h1>
                <h5>En el análisis hecho a sus clientes, la empresa XXX determinó que ellos ven cómo sus competidores se están preocupando por analizar con su software el impacto de las marcas de sus clientes en redes sociales de manera más ágil. Adicionalmente, ven que los clientes de sus marcas son bastante activos en redes sociales.</h5>

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
            $("#irfase0").click(function(){
                $('ul.tabs').tabs('select_tab', 'fase0');
            });
            $("#irfase2").click(function(){
                $('ul.tabs').tabs('select_tab', 'fase2');
            });

        </script>

    </body>
</html>