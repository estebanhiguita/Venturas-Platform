<!DOCTYPE html>
<?php
include ("php/registro.php");
include ("php/ruta.php");
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
            <div class="nav-wrapper"><a id="logo-container" href="#top" class="brand-logo">
                <img style="width:50px;" src="img/logo-venturas.gif">
                </a>
            <ul id="nav-mobile" class="right side-nav">
                <li><a href="#work">MI RUTA</a></li>
                <li><a href="#work">FASE 0</a></li>
                <li><a href="#team">UPGRADE</a></li>
                <li><a href="#contact">CONTACTO</a></li>
                <li><a href="index.php?action=callfunction"><i class="material-icons">power_settings_new</i></a></li>
            </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>
        <!-- Preguntas-->
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#fase0">Fase 0</a></li>
                    <li class="tab col s3"><a href="#fase1">Fase 1</a></li>
                    <li class="tab col s3"><a href="#fase2">Fase 2</a></li>
                    <li class="tab col s3 disabled"><a href="#fase3">Fase 3</a></li>
                </ul>
            </div>
            <div id="fase0" class="col s12">
                <div class="col s6 offset-s3">
                    <div class="card-panel white hoverable">
                        <div class="row">
                            <h3>Fase 0</h3>
                            <p>El desarrollo de una idea de negocio, bien sea sobre un producto o servicio, requiere la identificación previa de un problema, una oportunidad o una necesidad. Si no tienes claro lo anterior, es recomendable que te devuelvas en el proceso y pienses cuidadosamente qué estarías logrando con tu producto: <b>¿resolver algún problema? ¿Aprovechar una oportunidad? ¿Satisfacer una necesidad? </b></p>
                            <p>Recuerda que las oportunidades están estrechamente relacionadas con las tecnologías emergentes y el potencial de país, entre otros, mientras que los problemas y las necesidades tienen que ver con aquellos productos o servicios que logran aliviar algún dolor (entendiendo esto como algo que resulta molesto o que podría ser objeto de mejora y por lo que la gente pagaría para sentirse mejor) en tus clientes.</p>
                            <h6>¿Ya lo tienes claro? Indica qué fue lo que identificaste.
                            </h6>
                            <form action="#">
                                <p>
                                    <input class="with-gap" name="group1" type="radio" id="test1" />
                                    <label for="test1">Problema</label>
                                </p>
                                <p>
                                    <input class="with-gap" name="group1" type="radio" id="test2" />
                                    <label for="test2">Oportunidad</label>
                                </p>
                                <p>
                                    <input class="with-gap" name="group1" type="radio" id="test3"  />
                                    <label for="test3">Necesidad</label>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fase1" class="col s12">
                <div class="col s6 offset-s3">
                    <div class="card-panel white hoverable">

                        <div class="row">
                            <form action="pregunta1.php" method="post"  class="col s12">
                                <div class="row">
                                    <h3>
                                        <?php echo $pregunta;?>
                                    </h3>
                                    <h6><?php echo $descripcion;?></h6>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="icon_prefix" type="text" name="rta">
                                    </div>
                                </div>
                                <div class="center-align">
                                    <button action="pregunta1.php#fase2" class="btn red white-text waves-effect waves-light" type="submit" name="pregunta">
                                        <i class="material-icons">save</i>Guardar
                                    </button>
                                </div>
                            </form>
                            <a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="#modal1"><i class="material-icons">live_help</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fase2" class="col s12">
                <div class="col s6 offset-s3">
                    <div class="card-panel white hoverable">
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <h3>
                                        <?php echo $pregunta2;?>
                                    </h3>
                                    <h6><?php echo $descripcion2;?></h6>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="icon_prefix" type="text" class="materialize-textarea" name="rta2">
                                    </div>
                                </div>
                                <div class="center-align">
                                    <button class="btn red white-text waves-effect waves-light" type="submit" name="pregunta/2">
                                        <i class="material-icons">save</i>Guardar
                                    </button>
                                </div>
                            </form>
                            <a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="#modal2"><i class="material-icons">live_help</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fase3" class="col s12"><br>
                <h1>Muy pronto podrás continuar
                </h1>
            </div>
        </div>

        <!-- ayudas-->

        <!-- Modal Structure -->

        <div id="modal1" class="modal">
            <div class="modal-content">
                <h1>Ayuda</h1>
                <ul class="collapsible" data-collapsible="expandible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_1</i></div>
                        <div class="collapsible-body"><p><?php echo $retos1;?></p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_2</i></div>
                        <div class="collapsible-body"><p><?php echo $ejemplo1;?></p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_3</i></div>
                        <div class="collapsible-body"><p><?php echo $recuerda1;?></p></div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Regresa y !hazlo!</a>
            </div>
        </div>

        <div id="modal2" class="modal">
            <div class="modal-content">
                <h1>Ayuda</h1>
                <ul class="collapsible" data-collapsible="expandible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_1</i></div>
                        <div class="collapsible-body"><p><?php echo $retos2;?></p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_2</i></div>
                        <div class="collapsible-body"><p><?php echo $ejemplo2;?></p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_3</i></div>
                        <div class="collapsible-body"><p><?php echo $recuerda2;?></p></div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Regresa y !hazlo!</a>
            </div>
        </div>
        
        footer

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