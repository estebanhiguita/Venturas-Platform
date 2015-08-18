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
//preg 1
$select= "SELECT * FROM preguntas where preg_id = 1;";
$result = mysqli_query($mysqli, $select); 
$numrows=mysqli_num_rows( $result );
$row = mysqli_fetch_array($result); 
$pregunta = $row["titulo"];
$descripcion = $row["descripcion"];

//preg 1
$select= "SELECT * FROM preguntas where preg_id = 2;";
$result = mysqli_query($mysqli, $select); 
$numrows=mysqli_num_rows( $result );
$row = mysqli_fetch_array($result); 
$pregunta2 = $row["titulo"];
$descripcion2 = $row["descripcion"];

if(isset($_POST["pregunta"])){
    $rta=$_POST["rta"];
    if(!empty($rta)){   
    $query="insert into repuestas (descripcion) values('".$rta."')";
    $result = mysqli_query($mysqli, $query);
        if($result){
            echo "respuesta guardada";
        }
        else{
        echo "error";
        }
    }
    echo "la respuesta esta vacia";
}
?>