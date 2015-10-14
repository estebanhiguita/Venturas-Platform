<!DOCTYPE html>
<?php
include ("php/registro.php");
if(isset($_GET['action']) && $_GET['action'] == 'callfunction'){
    //call function here
    session_destroy();
    unset($_SESSION["usario"]);
    header("Location:index.php");
}
?>

<?php
header('Content-Type: text/html; charset=UTF-8'); 
?>
<html>
    <head>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <meta name="theme-color" content="#2196F3">
        <title>Venturas para emprendedores</title>


        <!-- CSS  -->
        <!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
        <!--
<nav>
<div class="container">
<div class="nav-wrapper">
<a href="#top" class="brand-logo">
<img style="width:50px;margin-left: 50px;" src="img/logo-venturas.gif">
</a>
</div>
</div>
<ul class="right hide-on-med-and-down">
<li><a href="#!">First Sidebar Link</a></li>
<li><a href="#!">Second Sidebar Link</a></li>
</ul>
<ul id="slide-out" class="side-nav">
<li><a href="#!">First Sidebar Link</a></li>
<li><a href="#!">Second Sidebar Link</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</nav>
-->

        <div class="navbar-fixed">
            <nav id="nav_f" class="default_color" role="navigation">
                <div class="container">
                    <div class="nav-wrapper"><a id="logo-container" href="#top" class="brand-logo">
                        <img style="width:50px;" src="img/LOGO/V-azulCl.svg">
                        </a>
                        <ul id="nav-mobile" class="right side-nav">
                            <li><a href="#work">Noticias</a></li>
                            <li><a href="#intro">¿Qué es Venturas?</a></li>
                            <li><a href="#contact">Contacto</a></li>
                            <li><a class="modal-trigger" href="#modal1">Login</a></li>
                            <li><a class="modal-trigger" href="#modal2">Registrarse</a></li>
                        </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Modal Login -->
        <div id="modal1" class="modal white">
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
                                <form class="col s12" action="index.php" method="post">
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
                                        <button class="btn red white-text waves-effect waves-light" type="submit" name="login" method="post" action="index.php">Login
                                            <i class="material-icons">send</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>        
                <!--
<div>
<button class="btn light-blue darken-4 white-text waves-effect waves-light" href="#">Login with facebook</button>
<button class="btn blue white-text waves-effect waves-light"  href="#">Login with google</button>
</div>
-->
            </div>
        </div>

        <!-- Modal Registro -->
        <div id="modal2" class="modal white">
            <div class="modal-content">
                <div class="right-align">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right-align">X</a>
                </div>
                <p>!Estás a un paso de crear tu modelo de negocio de una manera divertida!. Empieza con una cuenta gratuita.</p>
                <!--
<div>
<button class="btn light-blue darken-4 white-text waves-effect waves-light" href="#">Sing in with facebook</button>
<button class="btn blue white-text waves-effect waves-light"  href="#">Sing in with google</button>
</div>
-->
                <div class="row">
                    <div class="col s12 m8 offset-m2 l6 offset-l3">
                        <div class="card vRed neutral-1">
                            <div class="row">
                                <form class="col s12" action="index.php" method="post">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="nombre_registro" name="nombre_registro" type="text" class="validate">
                                            <label for="nombre_registro">Nombre</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="apellido_registro" name="apellido_registro" type="text" class="validate">
                                            <label for="apellido_registro">Apellido</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="correo_registro" name="correo_registro" type="text" class="validate">
                                            <label for="correo_registro">Correo</label>
                                        </div>
                                        <div class="input-field col s6">

                                            <select class="browser-default countries" name="pais_registro"  id="countryId">                    
                                                <option>Country</option> 
                                            </select>

                                        </div>
                                    </div>
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                    <script src="http://lab.iamrohit.in/js/location.js"></script>
                                    <div class="row">

                                        <div class="input-field col s6">                  

                                            <input id="edad_registro" type="number" name="edad_registro" class="validate">
                                            <label for="edad_registro">Edad</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="contraseña" name="contraseña" type="password" class="validate" type="password">

                                            <label for="contraseña">Contraseña</label>
                                        </div>
                                    </div>
                                    <div class="center-align">
                                        <button class="btn red white-text waves-effect waves-light" type="submit" name="registrarme"> Registrarme
                                            <i class="material-icons">send</i>
                                        </button>
                                    </div> 
                                </form>
                                <div class="row">
                                    <div class="col s6">
                                        <form action="#">
                                            <p>
                                                ¿Ya tienes una cuenta inicia sesión <a class="modal-trigger modal-action modal-close waves-effect waves-green btn-flat right-align" href="#modal1">aquí</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>


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
                    <span>Soy</span> 
                    <span class="cd-words-wrapper waiting">
                        <b class="is-visible">constructor de sueños
                        </b>
                        <b>dedicado e innovador</b>
                        <b>emprendedor</b>
                        <b>aventurero, estoy en Venturas</b>
                    </span>
                </h1>
            </div>
        </div>

        <!--News-->
        <div class="section scrollspy" id="work">
            <div class="container">
                <!--        <h2 class="header text_b">Noticias</h2>-->
                <h5>Actualidad para emprendedores</h5>
                <div class="row">
                    <div class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/noticias/Noticia1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">¿Tu startup será un éxito o un fracaso?<i class="mdi-navigation-more-vert right"></i></span>
                                <p><a href="http://www.soyentrepreneur.com/28679-5-formas-de-saber-si-tu-startup-sera-un-exito-o-un-fracaso.html">Ver más</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">¿Tu startup será un éxito o un fracaso?<i class="mdi-navigation-close right"></i></span>
                                <p> Poner a prueba las suposiciones iniciales es una de las tareas más importantes de cualquier startup. Sin embargo, los grupos de enfoque suelen ser costosos, las encuestas tienen tasas de respuesta muy bajas y, si te dedicas a sondear a la gente que conoces, lo más probable es que te den las respuestas que piensan que quieres escuchar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/noticias/Noticia2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Guía para elegir tu modelo de negocio<i class="mdi-navigation-more-vert right"></i></span>
                                <p><a href="http://www.soyentrepreneur.com/27387-guia-para-elegir-tu-modelo-de-negocio.html
                                    ">Ver más</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Guía para elegir tu modelo de negocio<i class="mdi-navigation-close right"></i></span>
                                <p>Hay una frase popular que dice: “no corras antes de caminar”. Trasladada al mundo de los negocios, diría: “no emprendas sin antes conocer e investigar”. Y es que para emprender de la mano de una marca (concepto conocido como “llave en mano”) primero debes conocer cómo opera el esquema de negocio de ésta para determinar si se adapta a tu perfil, gustos, personalidad y bolsillo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/noticias/Noticia3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">10 herramientas digitales que todo emprendedor debe conocer<i class="mdi-navigation-more-vert right"></i></span>
                                <p><a href="http://www.mdeinteligente.co/estrategia/herramientas-digitales-para-emprendedores-emprendimiento-medellin/">Ver más</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">10 herramientas digitales que todo emprendedor debe conocer<i class="mdi-navigation-close right"></i></span>
                                <p>No podemos asegurarte que con ellas tengas todo a la mano, pero sí que pueden facilitar tu trabajo e impulsar tu negocio. ¡Haz de la tecnología tu aliada con estas herramientas digitales para emprendedores!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/noticias/Noticia4.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Cuándo es momento de dejar tu trabajo<i class="mdi-navigation-more-vert right"></i></span>
                                <p><a href="http://www.soyentrepreneur.com/29101-cuando-es-momento-de-dejar-tu-trabajo.html
                                    ">Ver más</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Cuándo es momento de dejar tu trabajo<i class="mdi-navigation-close right"></i></span>
                                <p>Casi todos tenemos alguna forma de espíritu emprendedor y con ello, el potencial de manejar un negocio propio. Pero este estilo de vida no es para todos. Muchas personas deciden poner sus talentos a trabajar para la compañía de alguien más, haciendo transformaciones desde adentro, siendo intrapreneurs. Para otros, laborar en una compañía más no es una opción, por lo que deciden abrir sus propios negocios.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <img src="img/iconos-valiente.png" alt="valiente" class="responsive-img">
                            <h5 class="promo-caption">Ser emprendedor es cosa de valientes</h5>
                            <p class="light center"> Muchos sueñan hacerlo, pocos se lanzan a realizarlo. Es un sueño por el que se lucha día a día, y no es raro que ni tu familia ni tus amigos entiendan bien por lo que se pasa.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m3 l3">
                        <div class="center promo promo-example">
                            <img src="img/iconos-emprendedores.png" alt="valiente" class="responsive-img">
                            <h5 class="promo-caption">Plataforma para emprendedores</h5>
                            <p class="light center">Mejor aún: para el estilo de vida de los emprendedores. Un sitio para informarse, para proyectarse, conectar ideas y oportunidades, incluso otros emprendedores y de paso, para entretenerse un poco.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m3 l3">
                        <div class="center promo promo-example">
                            <img src="img/iconos-datos.png" alt="valiente" class="responsive-img">
                            <h5 class="promo-caption">Más allá de los datos</h5>
                            <p class="light center">Acá encuentras, más allá de los datos, noticias y ayudas sectorizadas, -sin duda, de gran importancia para tu labor-, una ruta de empresarismo ciudadosamente diseñada para desarrollar tus ideas de negocios, con guías y herramientas que te apoyan y mientras avanzas en el proceso.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m3 l3">
                        <div class="center promo promo-example">
                            <img src="img/iconos-divertido.png" alt="valiente" class="responsive-img">
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

        <!--Parallax-->
<!--
        <div class="parallax-container">
            <div class="parallax"><img src="img/parallax1.png"></div>
        </div>
-->

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
                            <li><a class="white-text" href="#">Home</a></li>
                            <li><a class="white-text" href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Social</h5>
                        <ul>
                            <li>
                                <a class="white-text" href="#">
                                    <i class="small fa fa-facebook-square white-text"></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a class="white-text" href="#">
                                    <i class="small fa fa-github-square white-text"></i> Github
                                </a>
                            </li>
                            <li>
                                <a class="white-text" href="#">
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
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

        <script src="js/init.js"></script>

        <script>
            $(document).ready(function(){
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
                $(".button-collapse").sideNav();
            });
        </script>

    </body>
</html>