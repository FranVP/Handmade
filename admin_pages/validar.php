<?php
include('_setup.php');
$usuario = $_POST['usuario'];
$pass = $_POST['password'];

$resultado = mysqli_query($conexion,"SELECT usuario, email, nombre, apellido,telefono FROM login  WHERE usuario='$usuario' and password='$pass' and permisos='admin'")
or die("Error: ".mysqli_error($conexion));
$fila = mysqli_fetch_assoc( $resultado);

echo $fila['nombre'];
//echo $usuario;
//echo $pass;

//if($row['password'] == $pass){
//    session_start();
//    $_SESSION['usuario'] = $usuario;
//    header("Location: admin_galerias.php");
//}else{
//    header("Location: index3.php");
//    exit();
//}


?>