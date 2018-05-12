<?php
include ('_setup.php');
$direccion  = $_POST['direccion'];
$numero  = $_POST['numero'];
$piso  = $_POST['piso'];
$codigopostal  = $_POST['codigopostal'];
$descripcion  = $_POST['descripcion'];
$estado = $_POST['estado'];
$id = $_POST['n_pedido'];



$result = mysqli_query($conexion, "UPDATE pedidos SET DIRECCION='$direccion', NUMERO='$numero',PISO='$piso',CODIGOPOSTAL='$codigopostal',DESCRIPCION='$descripcion', ESTADO='$estado' WHERE N_PEDIDO  = '$id'")or die("Error: ".mysqli_error($conexion));
header('Location: admin_pedidos.php');
?>