<?php
include("registro.php");
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
    
//estas

if(isset($_POST["sub_preg_1"])){
    $mysqli =new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}
    $mysqli->set_charset("utf8");
//aqui van los nombres de los campos que vamos a traer   
$respuesta=$_POST["rta1"];
$usuario= $_SESSION["usuario"];
$select= "INSERT INTO repuestas(descripcion, usuario_id, preg_id) values ('".$respuesta."','".$usuario."',1)  ;";

//$numrows=mysqli_num_rows( $result );

if ($result = mysqli_query($mysqli, $select) ){

   
       echo  "<script> alert('Se ha guardado correctamente'); </script> ";
       header('Location:../pregunta1.php'); 
       
       
     
   } else {
echo  "<script> alert('No se pudo ingresar'); </script> ";
}
}

?>