<?php
include ('_setup.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$result = mysqli_query($conexion, "SELECT ID_FOTO, ARCHIVO, NOMBRE, ESTADO FROM imagenes WHERE ID_FOTO = '$id' LIMIT 1")or die("Error: ".mysqli_error($conexion));;
$fila = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($conexion);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Editar foto</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        .container{
            margin-top: 5px;
            margin-bottom:10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">HANDMADE ADMIN</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="admin_modificar_foto.php">
                    <fieldset>
                        <legend class="text-center header">Foto</legend>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control" required  value="<?php echo $fila['NOMBRE'];?>" />
                            </div>
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="estado" name="estado" type="text" placeholder="Visible o Invisible" class="form-control" required  value="<?php echo $fila['ESTADO'];?>" />
                            </div>
                        </div>

                        <input type="hidden" name="id_foto" value="<?php echo $id; ?>"/>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>