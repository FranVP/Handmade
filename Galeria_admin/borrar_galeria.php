<?php
if (isset ($_GET['id'])){
    $id = $_GET['id'];

include('_setup.php');

$consulta=<<<SQL
DELETE FROM galerias
WHERE IDGALERIA='$id'
LIMIT 1
SQL;

mysqli_query($cnx,$consulta);
}
header("Location: index.php");
?>