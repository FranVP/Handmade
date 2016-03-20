<?php //panel administrador
include('_setup.php');

$resultado = mysqli_query($conexion, "SELECT ID_GALERIA, TITULO, DESCRIPCION, FECHA_ALTA FROM galerias");
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Administrador de Galerias</title>
</head>
<body>
<h1>Panel de control</h1>
<h2>Listdo de galerias</h2>

<div><a href="nueva_galeria.php"> Crear una galeria</a> </div>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha alta</th>
        <th>Botones accion</th>
    </tr>
    <?php
    while( $fila = mysqli_fetch_assoc( $resultado )){
        echo "<tr>";
        echo "<td>$fila[TITULO]</td>";
        echo "<td>$fila[DESCRIPCION]</td>";
        echo "<td>$fila[FECHA_ALTA]</td>";
        echo "<td> <a href='editar_galeria.php?id=$fila[ID_GALERIA]'>editar</a> | <a href='borrar_galeria.php?id=$fila[ID_GALERIA]'>borrar </a>|<a href='administrar_fotos.php?id=$fila[ID_GALERIA]'> administrar fotos</a></td>";
        echo "<tr>";
    }


    ?>
</table>
</body>
</html>
