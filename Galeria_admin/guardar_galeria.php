<?php
include('_setup.php');
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];

$consulta = <<<SQL
INSERT INTO
      galerias
SET
    TITULO='$titulo',
    DESCRIPCION='$descripcion',
    FECHA_ALTA = NOW()
SQL;
mysqli_query($cnx, $consulta);

header('Location: index.php');
?>