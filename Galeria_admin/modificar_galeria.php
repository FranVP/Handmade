<?php
include('_setup.php');
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$id = $_POST['id_galeria'];


$result = mysqli_query($conexion, "UPDATE galerias SET TITULO='$titulo', DESCRIPCION='$descripcion' WHERE ID_GALERIA  = '$id'")or die("Error: ".mysqli_error($conexion));;





header('Location: index.php');
?>