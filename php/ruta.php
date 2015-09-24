<?php
$servername = "localhost";
$username = "ana";
$password = "ana";
$dbname = "venturas";
$usuario="";
$contra="";
$pregunta="";
$descripcion="";
$pregunta2="";
$descripcion2="";
$rta="";

$mysqli =new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}
$mysqli->set_charset("utf8");
$select= "SELECT * FROM preguntas;";
$result = mysqli_query($mysqli, $select); 
$numrows=mysqli_num_rows( $result );
$pila = array();
$pregunta = array();
$descripcion = array();
$pregunta_id = array();
$pregunta_ayuda_id = array();
while($row = mysqli_fetch_array($result)){
    array_push($pregunta, $row[0]);
    array_push($descripcion, $row[1]);
    array_push($pregunta_id, $row[2]);
    array_push($pregunta_ayuda_id, $row[3]);

}
array_push($pila, $pregunta,$descripcion,$pregunta_id,$pregunta_ayuda_id);
//print_r($pila);
$html="";
for($i=0;$i<$numrows; $i++)
{
    $html.='<div id="fase'.$i.'" class="col s12">'.
        '<div class="col s6 offset-s3">'.
        '<div class="card-panel white hoverable">'.
        '<div class="row">'.
        '<form action="pregunta'.$i.'.php" method="post"  class="col s12">'.
        '<div class="row">'.
        '<h3>'.$pila[0][$i].'</h3>'.
        '<h6>'.$pila[1][$i].'</h6></div>'.
        '<div class="row">'.
            '<div class="input-field col s12">'.
                '<input id="icon_prefix" type="text" name="rta">'.
            '</div>'.
        '</div>'.
'<div class="center-align">'.
'<button action="pregunta1.php#fase2" class="btn red white-text waves-effect waves-light" type="submit" name="pregunta">'.
        '<i class="material-icons">save</i>Guardar'.
    '</button></div></form>'.
'<a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="#modal1"><i class="material-icons">live_help</i></a>'.
'</div></div></div></div>';
    
}
$_SESSION["html"]=$html;?>