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
                    <button class="btn red white-text waves-effect waves-light" type="submit" name="pregunta">
                        <i class="material-icons">save</i>Guardar
                    </button>
                </div>
            </form>
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">live_help</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
      </div>
            </div>
        </div>
    </div>
    <div id="fase1" class="col s12">Test 2</div>
    <div id="fase2" class="col s12">Test 3</div>
    <div id="fase3" class="col s12">Test 4</div>
  </div>
        <!-- -->
        <div class="row ">
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
                <div>
                    <button class="btn-floating btn-large waves-effect waves-light red" href="ruta.html" >
                        <i class="medium material-icons">live_help</i>
                    </button>
                </div>
                <div class="center-align">
                    <button class="btn red white-text waves-effect waves-light" type="submit" name="pregunta">
                        <i class="material-icons">save</i>Guardar
                    </button>
                </div>
            </form>
      </div>
        <br>
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
      </div>
            </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
        <script>
            $(document).ready(function(){
                $('ul.tabs').tabs();
                $('.fixed-action-btn').FAB();
            });
        </script>
    </body>
</html>