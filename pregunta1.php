<!DOCTYPE html>
<?php
include ("php/ruta.php");
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
                <li><a href="#team">UPGRADE</a></li>
                <li><a href="#contact">CONTACTO</a></li>
            </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>
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
    </body>
</html>