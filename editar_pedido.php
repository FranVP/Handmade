<?php
include ('_conbbdd.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';

$result = mysqli_query($conexion, "SELECT direccion, numero,piso,codigopostal,descripcion,estado FROM pedidos WHERE n_pedido = '$id' LIMIT 1")or die("Error: ".mysqli_error($conexion));;
$fila = mysqli_fetch_assoc($result);

mysqli_free_result($result);
mysqli_close($conexion);

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <style>
        label{ display: block;}
        textarea {display: block;}
    </style>
</head>
<body>
<form method="post" action="modificar_pedido.php">



    <label>direccion</label>
    <input type="text" name="direccion" value="<?php echo $fila['direccion'];?>" />

    <label>numero</label>
    <input type="text" name="numero" value="<?php echo $fila['numero'];?>" />

    <label>piso</label>
    <input type="text" name="piso" value="<?php echo $fila['piso'];?>" />

    <label>codigopostal</label>
    <input type="text" name="codigopostal" value="<?php echo $fila['codigopostal'];?>" />

    <label>Descripcion</label>
    <textarea name="descripcion" rows="10" cols="90" maxlength="1500"><?php echo $fila['descripcion'];?></textarea>
    <input type="hidden" name="n_pedido" value="<?php echo $id; ?>"/>
    <input type="SUBMIT"/>
</form>
</body>
</html>