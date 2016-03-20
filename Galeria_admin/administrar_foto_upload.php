<?php
include('_setup.php');

$titulo = $_POST ['titulo'];
$fkgaleria = $_POST ['id_galeria'];


$estado= 'visible';
$nombre_file = mktime() .'.jpg';
$posicion = 0;

mysqli_query($conexion, "INSERT INTO imagenes SET nombre='$titulo', ARCHIVO='$nombre_file', ESTADO='$estado',POSICION='$posicion',FKGALERIA='$fkgaleria'")or die("Error: ".mysqli_error($conexion));;


$original = $_FILES['archivo']['tmp_name'];
$destino = "../fotos/$nombre_file";
move_uploaded_file($original,$destino);

header("Location: administrar_fotos.php?id=$fkgaleria");
//echo $nombre_file;

//var_dump($_POST);
//var_dump($_FILES);
//var_dump($_FILES['archivo']['tmp_name']);

?>