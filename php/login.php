<?php
session_start();
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
    


if(isset($_POST["action"])){
    $mysqli =new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}
    $mysqli->set_charset("utf8");
    
$usuario=$_POST["user"];
$contra=$_POST["pass"];
if(isset($_POST["registrarme"]))
{
    echo "registro";
    if(empty($_POST["nombre_registro"]) || empty($_POST["apellido_registro"]) || empty($_POST["correo_registro"]) || empty($_POST["pais_registro"]) || empty($_POST["edad_registro"]) || empty($_POST["contraseña"]))
            {
                //$mensajegeneral= "por favor revise los campos obligatorios y llenelos por completo";
                echo "<script>alert('Por favor llena los campos completos para registrate')</script>";
            }
            else
            {
                 $mysqli =new mysqli($servername, $username, $password, $dbname);
                    if ($mysqli->connect_errno) {
                        echo $mysqli->connect_errno;
                    }
              
                     $nombre= mysqli_real_escape_string($mysqli, $_POST["nombre_registro"]);
                     $apellidos= mysqli_real_escape_string($mysqli, $_POST["apellidos_registro"]);
                     $edad= mysqli_real_escape_string($mysqli, $_POST["edad_registro"]);
                     $correo= mysqli_real_escape_string($mysqli, $_POST["correo_registro"]);
                     $pais= mysqli_real_escape_string($mysqli, $_POST["pais_registro"]);
                     $contraseña= mysqli_real_escape_string($mysqli, $_POST["contraseña"]);
                     
                                               
                   
                    $sql1 = "INSERT INTO usuarios (nombre, apellido, email, pais ) VALUES ('".$nombre."', '".$apellidos."', '".$correo."','".$pais."');";
                    $sqlinsertinusers="insert into login (usuario, contraseña,id_tipo_rol) values ('$email', '".$contraseña."' , '1');";
                   
                
                    if ($runresult= mysqli_real_query($mysqli, $sql1))
                    {     
                     echo "<script>alert('El registro fue ingresado con èxito')</script>";
                     if($runresult1= mysqli_real_query($mysqli, $sqlinsertinusers))
                    {
                         echo "<script>alert('El registro fue ingresado con èxito')</script>";
                     }
                else
                {
                    echo "<script>alert('El registro fallò al ingresarse a la tabla de usuarios')</script>";
                }
                      
                       
                    }
                        else{ echo "<script>alert('El registro no se pudo ingresar')</script>"; }
                
                    
                mysqli_close($mysqli);  
                }
            
        } 




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