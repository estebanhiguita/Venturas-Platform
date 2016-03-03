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

$mysqli =new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}
$mysqli->set_charset("utf8");
$usuario= $_SESSION["usuario"];

$select= "SELECT descripcion FROM repuestas where preg_id = 0 and usuario_id = '".$usuario."';";
$result = mysqli_query($mysqli, $select);
$row = mysqli_fetch_array($result); 
$respuesta0 = $row["descripcion"];

$select= "SELECT descripcion FROM repuestas where preg_id = 1 and usuario_id = '".$usuario."';";
$result = mysqli_query($mysqli, $select);
$row = mysqli_fetch_array($result); 
$respuesta1 = $row["descripcion"];

$select= "SELECT descripcion FROM repuestas where preg_id = 2 and usuario_id = '".$usuario."';";
$result = mysqli_query($mysqli, $select);
$row = mysqli_fetch_array($result); 
$respuesta2 = $row["descripcion"];

$select= "SELECT descripcion FROM repuestas where preg_id = 3 and usuario_id = '".$usuario."';";
$result = mysqli_query($mysqli, $select);
$row = mysqli_fetch_array($result); 
$respuesta3 = $row["descripcion"];

if(isset($_POST["sub_preg_1"])){
    $usuario= $_SESSION["usuario"];
    $selectrta= "SELECT preg_id FROM repuestas WHERE usuario_id='".$usuario."';";
    $resultrta = mysqli_query($mysqli, $selectrta); 
    $numrows=mysqli_num_rows( $resultrta );
    $pregunta= array();
    while($row = mysqli_fetch_array($resultrta)){
        array_push($pregunta, $row["preg_id"]);
    }

    if(in_array("1", $pregunta, TRUE)){
        $usuario= $_SESSION["usuario"];
        $respuesta1=$_POST["rta1"];
        $select= "
                UPDATE repuestas
                SET descripcion = '".$respuesta1."'
                WHERE usuario_id = '".$usuario."' AND preg_id=1;
                ";
        if ($result = mysqli_query($mysqli, $select) ){
            echo  "<script> ('¡Has actualizado con exito! ');</script>";
            echo "<script>window.location.href='../fase1.php'; </script> ";
            //header('Location:../pregunta1.php'); 
        } else {
            echo  "<script> alert('No se pudo ingresar'); </script> ";
        }
    }else
    {
        $respuesta1=$_POST["rta1"];
        $fase0= $_POST["fase0"];
        $select2= "INSERT INTO repuestas(descripcion, usuario_id, preg_id) values ('".$fase0."','".$usuario."',0)  ;";
        $select= "INSERT INTO repuestas(descripcion, usuario_id, preg_id) values ('".$respuesta."','".$usuario."',1)  ;";
        if ($result = mysqli_query($mysqli, $select) ){
            $reult2=mysqli_query($mysqli, $select2);
            echo  "<script> ('Se ha guardado correctamente'); window.location.href='../fase1.php';
                   </script> ";
            //header('Location:../pregunta1.php'); 
        } else {echo  "<script> alert('No se pudo ingresar'); </script> ";}
    }
}

if(isset($_POST["sub_preg_2"])){
    $usuario= $_SESSION["usuario"];
    $selectrta= "SELECT preg_id FROM repuestas WHERE usuario_id='".$usuario."';";
    $resultrta = mysqli_query($mysqli, $selectrta); 
    $numrows=mysqli_num_rows( $resultrta );
    $pregunta= array();
    while($row = mysqli_fetch_array($resultrta)){
        array_push($pregunta, $row["preg_id"]);
    }

    if(in_array("2", $pregunta, TRUE)){
        $respuesta2=$_POST["rta2"];
        $select= "
                UPDATE repuestas
                SET descripcion = '".$respuesta2."'
                WHERE usuario_id = '".$usuario."' AND preg_id=2;
                ";
        if ($result = mysqli_query($mysqli, $select) ){
            echo  "<script> ('Se ha guardado correctamente'); window.location.href='../fase2.php';
                   </script> ";
            echo "<script>window.location.href='../fase2.php'; </script> ";
            //header('Location:../pregunta1.php'); 
        } else {
            echo  "<script> alert('No se pudo ingresar'); </script> ";
        }
    }else
    {
        $usuario= $_SESSION["usuario"];
        $respuesta2=$_POST["rta2"];
        $select= "  INSERT INTO repuestas(descripcion, usuario_id, preg_id)
                    values ('".$respuesta2."','".$usuario."',2)  ;
                 ";
        if ($result = mysqli_query($mysqli, $select) ){
            echo  "<script> ('Se ha guardado correctamente'); window.location.href='../fase2.php';
                   </script> ";
            echo "<script>window.location.href='../fase2.php'; </script> ";
            //header('Location:../pregunta1.php'); 
        } else {echo  "<script> alert('No se pudo ingresar'); </script> ";}
    }
}

if(isset($_POST["sub_preg_3"])){
    $usuario= $_SESSION["usuario"];
    $selectrta= "SELECT preg_id FROM repuestas WHERE usuario_id='".$usuario."';";
    $resultrta = mysqli_query($mysqli, $selectrta); 
    $numrows=mysqli_num_rows( $resultrta );
    $pregunta= array();
    while($row = mysqli_fetch_array($resultrta)){
        array_push($pregunta, $row["preg_id"]);
    }

    if(in_array("3", $pregunta, TRUE)){
        $respuesta3=$_POST["rta3"];
        $select= "
                UPDATE repuestas
                SET descripcion = '".$respuesta3."'
                WHERE usuario_id = '".$usuario."' AND preg_id=3;
                ";
        if ($result = mysqli_query($mysqli, $select) ){
            echo  "<script> ('Se ha guardado correctamente'); window.location.href='../fase3.php';
                   </script> ";
            echo "<script>window.location.href='../fase3.php'; </script> ";
            //header('Location:../pregunta1.php'); 
        } else {
            echo  "<script> alert('No se pudo ingresar'); </script> ";
        }
    }else
    {
        $usuario= $_SESSION["usuario"];
        $respuesta2=$_POST["rta2"];
        $select= "  INSERT INTO repuestas(descripcion, usuario_id, preg_id)
                    values ('".$respuesta3."','".$usuario."',3)  ;
                 ";
        if ($result = mysqli_query($mysqli, $select) ){
            echo  "<script> ('Se ha guardado correctamente'); window.location.href='../fase3.php';
                   </script> ";
            echo "<script>window.location.href='../fase3.php'; </script> ";
            //header('Location:../pregunta1.php'); 
        } else {echo  "<script> alert('No se pudo ingresar'); </script> ";}
    }
}


//aqui van los nombres de los campos que vamos a traer   


?>