<?php
//$servername = "mysql3.000webhost.com";
//$username = "a8914182_ventura";
//$password = "venturas123";
//$dbname = "a8914182_ventura";
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
$retos1="";
$ejemplo1="";
$recuerda1="";
$retos1="";
$ejemplo1="";
$recuerda1="";

$mysqli =new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}
$mysqli->set_charset("utf8");
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