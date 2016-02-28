<?php //panel administrador
include('_setup.php');
$consulta =<<<SQL
SELECT
  IDGALERIA,
  TITULO,
  DESCRIPCION,
  DATE_FORMAT ( FECHA_ALTA , '%d/%m/%Y %H:%i' ) as FECHA_ALTA
FROM
  galerias
SQL;
$filas = mysqli_query($cnx,$consulta);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Administrador de Galerias</title>
</head>
<body>
    <h1>Panel de control</h1>
    <h2>Listdo de galerias</h2>

    <div><a href="nueva_galeria.php"></a> </div>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Decha alta</th>
            <th>Botones accion</th>
        </tr>
        <?php
        while($columna = mysqli_fetch_assoc($filas)){
            echo "<tr>";
            echo "<td>$columna[TITULO]</td>";
            echo "<td>$columna[DESCRIPCION]</td>";
            echo "<td>$columna[FECHA_ALTA]</td>";
            echo "<td> <a href='editar_galeria.php?id=$columna[IDGALERIA]'>editar</a> | <a href='borrar_galeria.php?id=$columna[IDGALERIA]'>borrar </a>|<a href='modificar_galeria.php?id=$columna[IDGALERIA]'> administrar</a></td>";
            echo "<tr>";
        }
        ?>
    </table>
</body>
</html>
