<?php
include ('_setup.php');
$nombre  = $_POST['nombre'];
$estado = $_POST['estado'];
$id = $_POST['id_foto'];

$result = mysqli_query($conexion, "UPDATE imagenes SET nombre='$nombre', estado='$estado' WHERE id_foto  = '$id'")or die("Error: ".mysqli_error($conexion));
header('Location: admin_galerias.php');
?>