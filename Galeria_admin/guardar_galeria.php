<?php
include('_setup.php');
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];

mysqli_query($conexion, "INSERT INTO galerias SET TITULO='$titulo',DESCRIPCION='$descripcion',FECHA_ALTA = NOW()")or die("Error: ".mysqli_error($conexion));;

header('Location: index.php');
?>