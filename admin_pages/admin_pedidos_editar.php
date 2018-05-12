<?php
include ('_setup.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$result = mysqli_query($conexion, "SELECT direccion, numero,piso,codigopostal,descripcion,estado FROM pedidos WHERE n_pedido = '$id' LIMIT 1")or die("Error: ".mysqli_error($conexion));;
$fila = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($conexion);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Editar Pedido</title>
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
                <li><a href="admin_pedidos.php">Volver al inicio</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="admin_modificar_pedido.php">
                    <fieldset>
                        <legend class="text-center header">Pedidos</legend>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="dir" name="direccion" type="text" placeholder="Direccion" class="form-control" required  value="<?php echo $fila['direccion'];?>" />
                            </div>
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="numero" name="numero" type="number" placeholder="Numero" class="form-control" required  value="<?php echo $fila['numero'];?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="piso" name="piso" type="text" placeholder="Piso" class="form-control" required value="<?php echo $fila['piso'];?>" />
                            </div>
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="cp" name="codigopostal" type="text" placeholder="C.P." class="form-control" required value="<?php echo $fila['codigopostal'];?>" />
                            </div>

                        </div>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <textarea class="form-control" id="message" name="descripcion" placeholder="Introduce la descripción de tu pedido." rows="10" maxlength="1500"><?php echo $fila['descripcion'];?></textarea>
                            </div>
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="estado" name="estado" type="text" placeholder="estado" class="form-control" required value="<?php echo $fila['estado'];?>" />
                            </div>
                        </div>
                        <input type="hidden" name="n_pedido" value="<?php echo $id; ?>"/>
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