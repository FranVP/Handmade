<?php
include('_setup.php');
$id = $_GET['id'];

$consulta=<<<SQL
SELECT TITULO, DESCRIPCION
FROM galerias WHERE IDGALERIA = '$id'
LIMIT 1
SQL;

$filas = mysqli_query( $cnx, $consulta);
$columnas = mysqli_fetch_assoc($filas);
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
    <input type="text" name="titulo" value="<?php echo $columnas['TITULO'];?>" />
    <label>Descripcion</label>
    <textarea name="descripcion" rows="5" cols="90"><?php echo $columnas['DESCRIPCION'];?>"</textarea>
    <input type="hidden" name="idgaleria" value="<?php echo $id; ?>"/>
    <input type="Submit"/>
</form>
</body>
</html>