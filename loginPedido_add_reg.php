<html>
<body>
<?php
// USUARIOS NUEVOS
include('_conbbdd.php');
$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$telef= $_POST['telef'];
$user = $_POST['user'];
$pass = $_POST['password'];

mysqli_query($conexion, "INSERT INTO login
SET NOMBRE='$name',
APELLIDO='$lname',
EMAIL='$email',
TELEFONO='$telef',
USUARIO='$user',
PASSWORD='$pass'")
or die("Error: ".mysqli_error($conexion));;

header('Location: pedidos.php');

?>
</body>
</html>