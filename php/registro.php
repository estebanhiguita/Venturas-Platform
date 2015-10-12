<?php
include("login.php");
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
$email="";
$mysqli =new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}
$mysqli->set_charset("utf8");
if(isset($_POST["registrarme"]))
{

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
        $apellidos= mysqli_real_escape_string($mysqli, $_POST["apellido_registro"]);
        $edad= mysqli_real_escape_string($mysqli, $_POST["edad_registro"]);
        $correo= mysqli_real_escape_string($mysqli, $_POST["correo_registro"]);
        $pais= mysqli_real_escape_string($mysqli, $_POST["pais_registro"]);
        $contraseña= mysqli_real_escape_string($mysqli, $_POST["contraseña"]);



        $sql1 = "INSERT INTO usuarios (nombre, email, pais, edad ) VALUES ('".$nombre."',  '".$correo."','".$pais."','".$edad."');";
        
        


        if ($runresult= mysqli_real_query($mysqli, $sql1))
        {
            $select= "select * from  usuarios where email ='".$correo."';";
            $result = mysqli_query($mysqli, $select);
            //echo mysqli_error($result);
                $row = mysqli_fetch_array($result); 
                $id_login = $row["id_usuario"];
                $email=$row["email"];
                
            
        // echo " id:login :".$id_login;
                $sqlinsertinusers="insert into login (id_user, email, contrasena,id_tipo_rol) values (".$id_login.",'".$correo."', '".$contraseña."' , '1');";
            //echo "<script>alert('El registro fue ingresado con èxito')</script>";
            if($runresult1= mysqli_real_query($mysqli, $sqlinsertinusers))
            {
                $_SESSION["usuario"]=$email;
                $_SESSION["rol"]=1;
                echo "<script>alert('El registro fue ingresado con èxito'); window.location.replace('pregunta1.php'); </script>";
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
?>