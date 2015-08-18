<?php
session_start();
$servername = "localhost";
$username = "ana";
$password = "ana";
$dbname = "venturas";
$usuario="";
$contra="";
    


if(isset($_POST["action"])){
    $mysqli =new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}
    
$usuario=$_POST["user"];
$contra=$_POST["pass"];

$select= "SELECT * FROM login where usuario = '".$usuario."' and contrasena = '".$contra."' ;";
$result = mysqli_query($mysqli, $select); 
$numrows=mysqli_num_rows( $result );

if ($row = mysqli_fetch_array($result) and $numrows >0){

   do {
       header('Location: /venturas-platform/pregunta1.php'); 
     echo  "<script> alert('Usuario y contraseña correctos'); </script> ";
   } while ($row = mysqli_fetch_array($result)); 

} else {
echo  "<script> alert('Usuario y contraseña incorrectos'); </script> ";
}
}
?>