<html>
<body>
<?php
// PEDIDOS NUEVOS
include('_conbbdd.php');
$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$dir = $_POST['dir'];
$numero = $_POST['numero'];
$piso = $_POST['piso'];
$c_p = $_POST['cp'];
$message = $_POST['message'];


mysqli_query($conexion, "INSERT INTO pedidos
SET NOMBRE='$name',
APELLIDO='$lname',
EMAIL='$email',
TELEFONO='$phone',
DIRECCION='$dir',
NUMERO='$numero',
PISO='$piso',
CODIGOPOSTAL='$c_p',
DESCRIPCION='$message'")
or die("Error: ".mysqli_error($conexion));;

header('Location: pedidos.php');

?>
</body>
</html>