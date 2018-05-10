<?php
include('_setup.php');
$fkgaleria = $_POST ['id_galeria'];
$cantidad = $_POST ['cantidad'];
$estado= 'visible';


foreach ( $_POST['titulo'] as $indice=>$titulo){
    $nombre_tmp = md5(mktime().$_FILES['archivo']['tmp_name'][$indice]);
    $nombre_file = $nombre_tmp .'.jpg';
    $posicion = $cantidad + $indice;

    mysqli_query($conexion, "INSERT INTO imagenes SET nombre='$titulo', ARCHIVO='$nombre_file', ESTADO='$estado',POSICION='$posicion',FKGALERIA='$fkgaleria'")or die("Error: ".mysqli_error($conexion));;
    $original = $_FILES['archivo']['tmp_name'][$indice];
    $destino = "../fotos/$nombre_file";

    move_uploaded_file($original,$destino);
}


header("Location: administrar_fotos.php?id=$fkgaleria");

?>