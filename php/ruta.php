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
print_r($pila);

?>