<!DOCTYPE html>
<?php
include ("php/login.php");
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
<body id="top" class="scrollspy">
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
                <li><a href="#intro">¿Qué es Venturas?</a></li>
                <li><a href="#work">Noticias</a></li>
                <li><a href="#team">Equipo</a></li>
                <li><a href="#contact">Contacto</a></li>
                <li><a class="modal-trigger" href="#modal1">Login</a></li>
                <li><a class="modal-trigger" href="#modal2">Registrarse</a></li>
            </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

  <!-- Modal Login -->
  <div id="modal1" class="modal">
    <div class="modal-content">
    <div class="right-align">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right-align">X</a>
    </div>
      <p>!Estás a un paso de empezar a crear tu modelo de negocio de una manera divertida!</p>
        <div class="row">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
          <div class="card vRed neutral-1">
            <div class="card-content white-text">
              <span class="card-title">Member Login</span>
            </div>
            <div class="row">
                <form class="col s12" action="home.php" method="post">
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate" name="user">
                      <label for="icon_prefix">User</label>
                    </div>
                    <div class="input-field col s12">
                      <i class="material-icons prefix">lock_outline </i>
                      <input id="password" type="password" class="validate" name="pass">
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="row">
<!--
                    <div class="col s6">
                        <form action="#">
                            <p>
                              <input type="checkbox" id="remember" />
                              <label for="remember">Recordarme</label>
                            </p>
                        </form>
                    </div>
-->
                    <div class="col s6">
                        <a href="#">Olvidé mi contraseña</a>
                    </div>
                  </div>
                    <div class="center-align">
                        <button class="btn red white-text waves-effect waves-light" type="submit" name="action">Login
                            <i class="material-icons">send</i>
                        </button>
                    </div>
                </form>
              </div>
          </div>
        </div>
      </div>        
    <div>
        <button class="btn light-blue darken-4 white-text waves-effect waves-light" href="#">Login with facebook</button>
        <button class="btn blue white-text waves-effect waves-light"  href="#">Login with google</button>
    </div>
    </div>
  </div>
    
    <!-- Modal Registro -->
  <div id="modal2" class="modal">
    <div class="modal-content">
    <div class="right-align">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right-align">X</a>
    </div>
      <p>!Estás a un paso de crear tu modelo de negocio de una manera divertida!. Empieza con una cuenta gratuita.</p>
        <div>
            <button class="btn light-blue darken-4 white-text waves-effect waves-light" href="#">Singin with facebook</button>
            <button class="btn blue white-text waves-effect waves-light"  href="#">Singin with google</button>
        </div>
        <div class="row">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
          <div class="card vRed neutral-1">
            <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Apellido</label>
                    </div>
                  </div>
                <div class="row">
                    <div class="input-field col s6">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Correo</label>
                    </div>
                    <div class="input-field col s6">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">País</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Edad</label>
                    </div>
                    <div class="input-field col s6">
                      <input id="last_name" type="text" class="validate" type="password">
                      <label for="last_name">Contraseña</label>
                    </div>
                </div>
                    
                  <div class="row">
                    <div class="col s6">
                        <form action="#">
                            <p>
                              ¿Ya tienes una cuenta inicia sesión <a class="modal-trigger modal-action modal-close waves-effect waves-green btn-flat right-align" href="#modal1">aquí</a>
                            </p>
                        </form>
                    </div>
                  </div>
                    <div class="center-align">
                        <button class="btn red white-text waves-effect waves-light" type="submit" name="action">Login
                            <i class="material-icons">send</i>
                        </button>
                    </div>
                </form>
              </div>
          </div>
        </div>
      </div>        
    </div>
  </div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span>I Love</span> 
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">creating</b>
                <b>innovating</b>
                <b>entrepreneurship</b>
                <b>Venturas</b>
            </span>
        </h1>
    </div>
</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h2 class="center header text_h2">Venturas es la plataforma para  <span class="span_h2"> emprendedores  </span>que te entiende y te <span class="span_h2">empodera</span> para construir tus proyectos. Tenemos una Ruta especializada para que desarrolles con claridad tus <span class="span_h2"> ideas de negocios.</span> </h2>
            </div>

            <div  class="col s12 m3 l3">
                <div class="center promo promo-example">
                    <i class="mdi-image-flash-on"></i>
                    <h5 class="promo-caption">Ser emprendedor es cosa de valientes</h5>
                    <p class="light center"> Muchos sueñan hacerlo, pocos se lanzan a realizarlo. Es un sueño por el que se lucha día a día, y no es raro que ni tu familia ni tus amigos entiendan bien por lo que se pasa.
</p>
                </div>
            </div>
            <div class="col s12 m3 l3">
                <div class="center promo promo-example">
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption">Plataforma para emprendedores</h5>
                    <p class="light center">Mejor aún: para el estilo de vida de los emprendedores. Un sitio para informarse, para proyectarse, conectar ideas y oportunidades, incluso otros emprendedores y de paso, para entretenerse un poco.
</p>
                </div>
            </div>
            <div class="col s12 m3 l3">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-desktop-windows"></i>
                    <h5 class="promo-caption">Más allá de los datos</h5>
                    <p class="light center">Acá encuentras, más allá de los datos, noticias y ayudas sectorizadas, -sin duda, de gran importancia para tu labor-, una ruta de empresarismo ciudadosamente diseñada para desarrollar tus ideas de negocios, con guías y herramientas que te apoyan y mientras avanzas en el proceso.
</p>
                </div>
            </div>
            <div class="col s12 m3 l3">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-desktop-windows"></i>
                    <h5 class="promo-caption">!Divertido!</h5>
                    <p class="light center">Paralelamente, podrás conocer las historias de personajes que viven experiencias propias de los emprendedores, allí muchas de las situaciones que has vivido estarán presentes, y otras que no, pero que tal vez te puedan resultar de utilidad, así sea para sonreír un rato.
</p>
                </div>
            </div>
            
            <div  class="col s12">
                <h4 class="center header text_h2">Si eres emprendedor, o estás a punto de comenzar, te invitamos a que conozcas Venturas y todo lo que tiene para tí.
</h4>
            </div>
        </div>
    </div>
</div>

<!--Work-->
<div class="section scrollspy" id="work">
    <div class="container">
        <h2 class="header text_b">Noticias</h2>
        <h5>Actualidad para emprendedores</h5>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project1.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project2.jpeg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project4.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project5.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project6.jpeg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/parallax1.png"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b"> Nuestro Equipo </h2>
        <div class="row">
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar1.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Alejandro Eusse <br/>
                            <small><em><a class="red-text text-darken-1" href="#">Chief Transmedia Officer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Esteban Higuita <br/>
                            <small><em><a class="red-text text-darken-1" href="#">Chief Technology Officer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar2.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Diana Osorio<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Chief Executive Officer</a></em></small>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit" name="action">Submit
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">venturas.co</h5>
                <ul>
                    <li><a class="white-text" href="http://www.joashpereira.com/">Home</a></li>
                    <li><a class="white-text" href="http://www.joashpereira.com/blog">Blog</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/joash.c.pereira">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://github.com/joashp">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.linkedin.com/in/joashp">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Made by <a class="white-text" href="http://venturas.co">Venturas</a>.
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
        
        <script>
            $(document).ready(function(){
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
              });
        </script>

    </body>
</html>