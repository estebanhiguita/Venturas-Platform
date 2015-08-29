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
$retos1="";
$ejemplo1="";
$recuerda1="";
$ideas1="";
$retos2="";
$ejemplo2="";
$recuerda2="";
$ideas2="";

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

//preg 2
$select= "SELECT * FROM preguntas where preg_id = 2;";
$result = mysqli_query($mysqli, $select); 
$numrows=mysqli_num_rows( $result );
$row = mysqli_fetch_array($result); 
$pregunta2 = $row["titulo"];
$descripcion2 = $row["descripcion"];

//ayuda 1
$select= "SELECT * FROM pregunta_ayuda where preg_id = 1;";
$result = mysqli_query($mysqli, $select); 
$numrows=mysqli_num_rows( $result );
$row = mysqli_fetch_array($result); 
$select= "SELECT * FROM ayuda where ayuda_id =".$row["ayuda_id"].";";
$result = mysqli_query($mysqli, $select); 
$numrows=mysqli_num_rows( $result );
$row = mysqli_fetch_array($result); 
$retos1 = $row["retos"];
$ejemplo1 = $row["ejemplo"];
$recuerda1 = $row["recuerda"];
$ideas1 = $row["ideas"];

//ayuda 2
$select= "SELECT * FROM pregunta_ayuda where preg_id = 2;";
$result = mysqli_query($mysqli, $select); 
$numrows=mysqli_num_rows( $result );
$row = mysqli_fetch_array($result); 
$select= "SELECT * FROM ayuda where ayuda_id =".$row["ayuda_id"].";";
$result = mysqli_query($mysqli, $select); 
$numrows=mysqli_num_rows( $result );
$row = mysqli_fetch_array($result); 
$retos2 = $row["retos"];
$ejemplo2 = $row["ejemplo"];
$recuerda2 = $row["recuerda"];
$ideas2 = $row["ideas"];

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