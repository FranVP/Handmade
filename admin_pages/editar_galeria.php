<?php
include('_setup.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';

$result = mysqli_query($conexion, "SELECT TITULO, DESCRIPCION FROM galerias WHERE ID_GALERIA = '$id' LIMIT 1")or die("Error: ".mysqli_error($conexion));;
$fila = mysqli_fetch_assoc($result);

mysqli_free_result($result);
mysqli_close($conexion);

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>Editar galeria</title>
    <style>
        label{ display: block;}
        textarea {display: block;}
    </style>
</head>
<body>
<form method="post" action="modificar_galeria.php">
    <label>Titulo</label>
    <input type="text" name="titulo" value="<?php echo $fila['TITULO'];?>" />
    <label>Descripcion</label>
    <textarea name="descripcion" rows="5" cols="90"><?php echo $fila['DESCRIPCION'];?></textarea>
    <input type="hidden" name="id_galeria" value="<?php echo $id; ?>"/>
    <input type="SUBMIT"/>
</form>
</body>
</html>