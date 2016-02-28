<?php
include('_setup.php');
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$id = $_POST['idgaleria'];
$consulta = <<<SQL
UPDATE
      galerias
SET
    TITULO='$titulo',
    DESCRIPCION='$descripcion'
WHERE
  IDGALERIA  = '$id'
SQL;
mysqli_query($cnx, $consulta);

header('Location: index.php');
?>