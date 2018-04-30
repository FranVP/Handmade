<?php
include ('_conbbdd.php');
$direccion  = $_POST['direccion'];
$numero  = $_POST['numero'];
$piso  = $_POST['piso'];
$codigopostal  = $_POST['codigopostal'];
$descripcion  = $_POST['descripcion'];
$id = $_POST['n_pedido'];



$result = mysqli_query($conexion, "UPDATE pedidos SET DIRECCION='$direccion', NUMERO='$numero',PISO='$piso',CODIGOPOSTAL='$codigopostal',DESCRIPCION='$descripcion' WHERE N_PEDIDO  = '$id'")or die("Error: ".mysqli_error($conexion));
header('Location: historialPedido.php');
?>