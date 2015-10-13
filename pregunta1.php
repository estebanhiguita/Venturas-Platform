<!DOCTYPE html>
<?php
include ("php/registro.php");
include ("php/rutaAlpha.php");
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
            <div class="col s12" id="navfases">
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
                            <form action="php/insert_pregunta.php" method="post"  class="col s12">
                                <p>
                                    <input class="with-gap"  type="radio"  name="fase0" id="test1" value="problema" />
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
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="fase1" class="col s12">
                <div class="col s6 offset-s3">
                    <div class="card-panel white hoverable">

                        <div class="row">
                            
                                <div class="row">
                                    <h3>
                                        <?php echo $pregunta;?>
                                    </h3>
                                    <h6><?php echo $descripcion;?></h6>
                                    <p><b>Define en una frase, lo suficientemente clara y contundente, cuál es la solución que propones. Utiliza la ayuda para resolver algunas preguntas que te facilitarán la identificación de tu propuesta de valor. 
                                        </b></p>
                                    <p><b>

                                        Describe en una frase qué es lo que te hace diferente de tus competidores. Cuál es esa ventaja que te pone por encima de ellos y que tus clientes van a agradecer.
                                        </b></p>
                                </div>
                                
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="icon_prefix" type="text" name="rta1">
                                    </div>
                                </div>
                                <div class="center-align">
                                    <button action="pregunta1.php#fase2" class="btn red white-text waves-effect waves-light" type="submit" name="sub_preg_1">
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
                            <form action="php/insert_pregunta.php" method="post" class="col s12">
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
                                    <button class="btn red white-text waves-effect waves-light" type="submit" name="sub_preg_2">
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

        <div id="modal1" class="modal white">
            <div class="modal-content">
                <h1>Ayuda</h1>
                <ul class="collapsible" data-collapsible="expandible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_1</i></div>
                        <div class="collapsible-body"><p><p class="flow-text">Establecer con claridad tu propuesta de valor implica pensar en todo aquello que le estás entregando a tus clientes y que, de alguna manera, le estará facilitando algo. Piensa en lo siguiente.</p>
                            <br>
                            <ul>
                                <li class="flow-text">¿Qué tareas funcionales les ayudas a realizar? (Ej: resolver un problema específico, cumplir una tarea en particular, etc.).

                                </li>
                                <li class="flow-text">¿Qué tareas emocionales estás ayudando a cumplir? (Ej: estética, sentirse bien, seguridad, etc.).
                                </li>
                                <li class="flow-text">¿Qué tareas sociales estás ayudando a cumplir? (Ej: ganar poder, status, verse mejor, etc.). </li>
                                <li class="flow-text">¿Qué necesidades básicas les estás ayudando a satisfacer? (Ej: comunicación, etc.).</li>
                            </ul>
                            </p></div>
                </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">filter_2</i></div>
                <div class="collapsible-body"><p>
                    <p class="flow-text">Ahora bien, describe cómo tus productos o servicios le crean ganancias a tus clientes; cómo generan beneficios que tus clientes esperan, desean o lograrían sorprenderlos, incluyendo utilidad funcional, ganancias sociales, emociones positivas y ahorro en costos. Según lo anterior, tus productos:
                    </p>
                    <ul>
                        <li class="flow-text">¿Crean ahorros que hacen felices a tus clientes? <br> (En términos de tiempo, dinero y esfuerzos, por ejemplo).</li>
                        <li class="flow-text">¿Producen resultados que tus clientes esperan o que incluso superan sus expectativas? (Ej: mejor nivel de calidad, más de algo, menos de algo, etc.)
                        </li>
                        <li class="flow-text">¿Copian o superan soluciones existentes que tus clientes utilizan o compran actualmente? (Con relación a características específicas, desempeño, calidad, etc.).
                        </li>
                        <li class="flow-text">¿Hacen el trabajo/tarea o la vida de tus clientes más fácil? (Ej: usabilidad, accesibilidad, más servicios, menores costos, etc.).
                        </li>
                        <li class="flow-text">¿Hacen algo que los clientes buscan? (Ej: buen diseño, garantía, características específicas o adicionales, etc.).</li>
                    </ul> </p></div>
        </li>
    <li>
        <div class="collapsible-header"><i class="material-icons">filter_3</i></div>
        <div class="collapsible-body"><p class="flow-text">Describe cómo tus productos o servicios alivian los dolores de los clientes. ¿Cómo eliminan o reducen emociones negativas, costos y situaciones indeseables, o riesgos que tus clientes experimentan o podrían experimentar antes, durante y después del cumplimiento de alguna tarea? Tus productos o servicios:
</p>
   <ul><li class="flow-text">¿Ahorran? (Tiempo, dinero, esfuerzos, etc.).
</li>
   <li class="flow-text">¿Hacen sentir mejor a tus clientes? (Ej: combate frustraciones, disgustos, cosas que se convierten en un dolor de cabeza, etc.).</li>
   <li class="flow-text">
¿Reparan soluciones de bajo rendimiento? (Ej: nuevas características, mejor calidad, mejor desempeño, etc.).
</li>
   <li class="flow-text">¿Ponen fin a las dificultades o retos que encuentran tus clientes? (Ej: elimina resistencia, facilita las tareas, les ayuda a completarlas, etc.).
</li>
   <li class="flow-text">¿Eliminan consecuencias sociales negativas que encuentran tus clientes? (Ej: pérdida de confianza, status, poder, etc.).
</li>
   <li class="flow-text">¿Eliminan los riesgos a los que tus clientes le temen? (Ej: financieros, sociales, técnicos o lo que pudiera salir mal, etc.).</li></ul></div>
    </li>

    </ul>
    <h1>Ejemplo</h1>
    <p class="flow-text">Dell ofrece soluciones tecnológicas, servicios y asistencia. </p>
    <p class="flow-text">¿Sabías que el modelo de negocio de Dell empezó gracias a la experimentación de su fundador, Michael Dell? Luego de desarmar su primer Apple II, se dio cuenta de que podía cambiar algunas piezas y agregar otras para mejorar su funcionamiento: una pantalla más grande, memoria de más capacidad, módem más rápido y disquetera. Después del experimento y de familiarizarse mucho más con los componentes, entendió que era posible comprar las piezas más modernas del mercado y ensamblar computadores según las exigencias de los clientes para entregárselos en la puerta de su casa por mucho menos dinero.  
</p>
    <p class="flow-text">Precisamente en lo anterior está su factor diferenciador. Dell decidió plantear su modelo de negocio eliminando a los distribuidores, teniendo así un canal directo con el cliente final, quien además tenía la posibilidad de armar los equipos según su necesidad, mientras que con las otras marcas la persona debía acomodarse a las referencias establecidas previamente por éstas.  </p>
</div>
<div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Regresa y !hazlo!</a>
</div>
</div>

<div id="modal2" class="modal white">
    <div class="modal-content">
        <h1>Ayuda</h1>
         <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_1</i></div>
      <div class="collapsible-body"><p class="flow-text">Recuerda que antes identificaste si estás atendiendo un problema o necesidad. Piensa entonces, inicialmente, en términos de quiénes tienen ese dolor o necesidad. ¿Mujeres? ¿Hombres? ¿Entre qué edades? ¿Ubicados en dónde? Si tu oferta beneficia al sector productivo, entonces piénsalo en términos de industrias, empresas, asociaciones.</p>
      <p class="flow-text"></p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_2</i></div>
      <div class="collapsible-body"><p class="flow-text">Establece muy bien cuáles son las características de tus clientes potenciales. Cuando hayas identificado el segmento, cuantifícalo. No tienes que salir a hacer un estudio de mercado, apóyate en lo que ya existe. Identifica bases de datos y herramientas que puedan aportar cifras importantes. 
</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_3</i></div>
      <div class="collapsible-body"><p class="flow-text">Si te estás dirigiendo a un sector muy específico, busca quién agremia o reúne a tus clientes (asociaciones, federaciones, etc.). Cuantificar el mercado es vital, pues te permite saber rápidamente si es atractivo o no, si va en crecimiento o no.</p></div>
    </li>
  </ul>
   <h1>Ejemplo</h1>
   <p class="flow-text">El público objetivo de Dell se puede dividir en cuatro segmentos: grandes organizaciones, pequeñas y medianas empresas, clientes individuales e instituciones educativas.</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Regresa y !hazlo!</a>
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