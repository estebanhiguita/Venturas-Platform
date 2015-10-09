<?php
session_start();
$servername = "mysql3.000webhost.com";
$username = "a8914182_ventura";
$password = "venturas123";
$dbname = "a8914182_ventura";
$usuario="";
$contra="";
$nombre="";
$apellidos="";
$correo="";
$pais="";
$edad="";
$contraseña="";

//$mysql_host = "mysql3.000webhost.com";
//$mysql_database = "a8914182_ventura";
//$mysql_user = "a8914182_ventura";
//$mysql_password = "venturas123";
    


if(isset($_POST["login"])){
    $mysqli =new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}
    $mysqli->set_charset("utf8");
    
$usuario=$_POST["user"];
$contra=$_POST["pass"];

$select= "SELECT * FROM login where email = '".$usuario."' and contrasena = '".$contra."' ;";
$result = mysqli_query($mysqli, $select); 
$numrows=mysqli_num_rows( $result );

if ($row = mysqli_fetch_array($result) ){

   do {
       if($numrows>0){
           $_SESSION["usuario"]=$usuario;
       echo  "<script> alert('Usuario y contraseña correctos'); </script> ";
       header('Location:pregunta1.php'); 
       
       }
     
   } while ($row = mysqli_fetch_array($result)); 

} else {
echo  "<script> alert('Usuario y contraseña incorrectos'); </script> ";
}
}
?>