<!DOCTYPE html>
<?php
include ("php/registro.php");
include ("php/rutaAlpha.php");
//include ("php/insert_pregunta.php");
$respuesta1="";
$respuesta2="";
$respuesta3="";
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
        <!-- Preguntas-->
        <div class="row">
            <h2 class="center-align">Clientes</h2>
        </div>
        <div class="row">
            <div class="col s12" id="navfases">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#fase0">1. Clientes</a></li>
                    <li class="tab col s3"><a href="#fase1">A resolver</a></li>
                    <li class="tab col s3"><a href="#fase2">1.1. Clientes</a></li>
                    <li class="tab col s3 disabled"><a href="#fase3">A resolver</a></li>
                </ul>
            </div>
            <div id="fase0" class="col s12">
                <div class="col s6 offset-s3">
                    <div class="card-panel white hoverable">
                        <div class="row">
                            <h5>Ya resolviste si atenderás un problema, una oportunidad o una necesidad. 
                                Ahora, incluso antes de pensar en la solución, es necesario que identifiques a los que podrán ser tus clientes, es decir, a quiénes llevarles tu producto o servicio. Conocerlos de manera detallada te permitirá establecer, de manera más acertada, tu propuesta de valor. Vamos a hacerlo de manera que puedas reconocer diferentes aspectos del cliente para comprenderlo mejor. Vamos por partes:</h5>

                            <h5>¿Quiénes son los que se están viendo afectados por el problema? ¿Quiénes están manifestando la necesidad? ¿A quiénes les interesa la oportunidad que visualizaste? ¿Quiénes finalmente tienen ese “dolor” y estarían dispuestos a pagar para aliviarlo?</h5>

                            <h5>Empecemos por ponernos en el lugar de tu cliente.</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div id="fase1" class="col s12">
                <div class="col s6 offset-s3">
                    <div class="card-panel white hoverable">
                        <div class="row">
                            <h3>
                                ¿Qué piensa y qué siente tu cliente con respecto a ese problema o necesidad?

                            </h3>
                            <form action="php/insert_pregunta.php" method="post" class="col s12">

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="icon_prefix" type="text"  value='<?php echo $respuesta2; ?>' name="rta1">
                                    </div>
                                </div>
                                <div class="center-align">
                                    <button action="pregunta1.php#fase2" class="btn red white-text waves-effect waves-light"  type="submit" name="sub_preg_1">
                                        <i class="material-icons">save</i>Guardar
                                    </button>
                                </div>
                            </form>
                            <a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="#modal1"><i class="material-icons">live_help</i></a>
                            <a class="btn-floating btn-large waves-effect waves-light green right modal-trigger" href="#modal2"><i class="material-icons">live_help</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fase2" class="col s12">
                <div class="col s6 offset-s3">
                    <div class="card-panel white hoverable">
                        <div class="row">
                            <h5>Ya estableciste qué siente y piensa tu cliente con respecto a la problemática que identificaste. Ahora debes investigar qué es lo que ellos ven actualmente en su entorno, enfocándote no sólo en la situación o necesidad que quieres resolver, sino en aquellos productos o servicios que ya existen para mitigar ese “dolor” de tu cliente, es decir, conocer la oferta del mercado.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fase3" class="col s12">
                <div class="col s6 offset-s3">
                    <div class="card-panel white hoverable">
                        <div class="row">
                            <h3>
                                ¿Qué ve tu cliente en su entorno con respecto al problema o necesidad que identificaste y a lo que ya le ofrece el mercado?


                            </h3>
                            <form action="php/insert_pregunta.php" method="post" class="col s12">

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="icon_prefix" type="text"  value='<?php echo $respuesta3; ?>' name="rta1">
                                    </div>
                                </div>
                                <div class="center-align">
                                    <button action="pregunta1.php#fase2" class="btn red white-text waves-effect waves-light"  type="submit" name="sub_preg_1">
                                        <i class="material-icons">save</i>Guardar
                                    </button>
                                </div>
                            </form>
                            <a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="#modal3"><i class="material-icons">live_help</i></a>
                            <a class="btn-floating btn-large waves-effect waves-light green right modal-trigger" href="#modal4"><i class="material-icons">live_help</i></a>
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

                </h5>

        </div>
        </div>
    <div id="modal4" class="modal white">
        <div class="modal-content">
            <h1>Ejemplo</h1>
            <h5>En el análisis hecho a sus clientes, la empresa XXX determinó que ellos ven cómo sus competidores se están preocupando por analizar con su software el impacto de las marcas de sus clientes en redes sociales de manera más ágil. Adicionalmente, ven que los clientes de sus marcas son bastante activos en redes sociales.</h5>

        </div>
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