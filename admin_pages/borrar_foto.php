<?php
if (isset ($_GET['id'])){
    $id = $_GET['id'];
    include('_setup.php');
    mysqli_query($conexion, "DELETE FROM imagenes WHERE ID_FOTO='$id'LIMIT 1")or die("Error: ".mysqli_error($conexion));;
}
header("Location: admin_galerias.php");
?>