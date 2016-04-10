<?php
include('_setup.php');
$id_galeria = $_POST['id_galeria'];
foreach($_POST['posicion'] as $numero=>$id_foto){

$filas = mysqli_query($conexion, "UPDATE imagenes SET POSICION='$numero' WHERE ID_FOTO='$id_foto'")or die("Error: ".mysqli_error($conexion));;

}
header("Location: administrar_fotos.php?id=$id_galeria");
?>
