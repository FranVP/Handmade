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

<p>
<form name="form1" method="post" action="index.php" id="cdr">
    <h2>Buscar Galeria</h2>
    <input name="busca" type="text" id="busqueda">
    <input type="submit" name="submit" value="Buscar">
</p>
</form>

<?php
$busca="";
$busca=$_POST['busca'];
if($busca!=""){
    $busqueda = mysqli_query($conexion,"SELECT TITULO, FECHA_ALTA, DESCRIPCION , ID_GALERIA from galerias where titulo like '%".$busca."%'")or die("Error: ".mysqli_error($conexion));;
}
?>
<h2>Listdo de galerias buscadas</h2>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha alta</th>
        <th>Botones accion</th>
    </tr>
<?php
while( $fila1 = mysqli_fetch_assoc( $busqueda )){
    echo "<tr>";
    echo "<td>.$fila1[TITULO]</td>";
    echo "<td>.$fila1[DESCRIPCION]</td>";
    echo "<td>.$fila1[FECHA_ALTA]</td>";
    echo "<td> <a href='editar_galeria.php?id=.$fila1[ID_GALERIA]'>editar</a> | <a href='borrar_galeria.php?id=.$fila1[ID_GALERIA]'>borrar </a>|<a href='administrar_fotos.php?id=.$fila1[ID_GALERIA]'> administrar fotos</a></td>";
    echo "<tr>";
}
?>
</table>



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
