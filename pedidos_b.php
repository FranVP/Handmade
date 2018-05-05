<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
include ('_conbbdd.php');

$us = $_POST['us'];
$pass = $_POST['pass'];


//autocompletar formulario

$resultado = mysqli_query($conexion,"SELECT usuario, email, nombre, apellido,telefono FROM login WHERE usuario='$us' and password='$pass'")
or die("Error: ".mysqli_error($conexion));
$fila = mysqli_fetch_assoc( $resultado);
?>

<head>
    <title>Formulario Pedidos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="../Handmade/js/fontawesome-all.js"></script>
    <style>
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        footer {
            margin-top: 5px;
            background-color: #000000;
            color: white;
            padding: 5px;
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
            <a class="navbar-brand">HANDMADE</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="home_b.php">Home</a></li>
                <li><a href="nosotros_b.php">Nosotros</a></li>
                <li><a href="galeria_b.php">Galería</a></li>
                <li><a href="contacta_b.php">Contacta</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="historialPedido.php"><span class="glyphicon glyphicon-log-in"></span> Historial</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <!--FORMULARIO PEDIDO -->
                <form class="form-horizontal" method="post" action="pedidos_add_reg.php">
                    <fieldset>
                        <legend class="text-center header">Pedidos</legend>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control" value="<?php echo $fila['nombre']; ?>" required>
                            </div>
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="lname" name="lname" type="text" placeholder="Apellido" class="form-control" value="<?php echo $fila['apellido'];?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control" method="POST" value="<?php echo $fila['email']; ?>" required>
                            </div>
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control" value="<?php echo $fila['telefono'];?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="dir" name="dir" type="text" placeholder="Direccion" class="form-control" required>
                            </div>
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="numero" name="numero" type="number" placeholder="Numero" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="piso" name="piso" type="text" placeholder="Piso" class="form-control" required>
                            </div>
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="cp" name="cp" type="text" placeholder="C.P." class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Introduce la descripción de tu pedido." rows="10" maxlength="1500"></textarea>
                            </div>
                        </div>

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
<footer class="py-5 bg-dark navbar">
    <div class="container_footer">
        <p class="m-0 text-center text-white">© 2016-2017 Handmade Presents</p>
    </div>
</footer>


<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>