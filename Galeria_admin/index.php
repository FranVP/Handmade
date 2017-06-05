<?php //panel administrador
include('_setup.php');
$resultado = mysqli_query($conexion, "SELECT ID_GALERIA, TITULO, DESCRIPCION, FECHA_ALTA FROM galerias");
?>
<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Admin Galerias</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body >
<div class="container">
<h1>Panel de control</h1>
<p>
    <!--
<form name="form1" method="post" action="index.php" id="cdr">
    <h2>Buscar Galeria</h2>
    <input name="busca" type="text" id="busqueda">
    <input class="btn btn-primary" type="submit" name="submit" value="Buscar">
</p>
</form>

<?php
/*$busca="";
mysql_connect('localhost','root');
mysql_select_db("handmade");


$busca= isset($_POST['busca'])?$_POST['busca']:NUll;
if($busca!=""){
    $busqueda=mysql_query("SELECT ID_GALERIA,TITULO, DESCRIPCION, FECHA_ALTA
    from galerias
    where TITULO like '%".$busca."%'")
    or die("Error: ".mysqli_error($conexion));;
}
*/?>







    <h2>Listdo de galerias buscadas</h2>
<div class="col-md-12">
    <table class="table table-condensed">
    <thead>
    <tr>
        <th> Nombre </th>
        <th> Descripcion </th>
        <th> Fecha alta </th>
        <th> Botones accion </th>
    </tr>
    </thead>
<?php
while( $fila1 = mysql_fetch_array ($busqueda)){
    echo "<tr>";
    echo "<td>$fila1[TITULO]</td>";
    echo "<td>$fila1[DESCRIPCION]</td>";
    echo "<td>$fila1[FECHA_ALTA]</td>";
    echo "<td> <a href='editar_galeria.php?id=$fila1[ID_GALERIA]'>editar</a> | <a href='borrar_galeria.php?id=$fila1[ID_GALERIA]'>borrar </a>|<a href='administrar_fotos.php?id=.$fila1[ID_GALERIA]'> administrar fotos</a></td>";
    echo "<tr>";
}
?>
</table>
</div>

-->


<h2>Listdo de galerias</h2>
<div><a href="nueva_galeria.php"> Crear una galeria</a> </div>
    <div class="col-md-12">
<table class="table table-condensed">
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
    </div>
    </div>
<script src="js/jquery.js"></script>
</body>
</html>