<!DOCTYPE html>
<html lang="en">
<head>
    <title>Handmade Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        .jumbotron{
            margin-top: 5px;

        }
        .volver_home{
            margin-bottom: 110px;
            margin-top: 110px;
        }

        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 10px;
            }
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
                <li class="active"><a href="home_b.php">Home</a></li>
                <li><a href="nosotros_b.php">Nosotros</a></li>
                <li><a href="galeria_b.php">Galería</a></li>
                <li><a href="contacta_b.php">Contacta</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="loginPedido.php"><span class="glyphicon glyphicon-log-in"></span> Pedidos</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php
$destino = "handmadepresents2017@gmail.com";
$nombre = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mensaje = $_POST['message'];

$contenido = "Nombre: " . $nombre . "\nApellido: " . $lname . "\nEmail: " . $email . "\nTeléfono: " . $phone . "\nMensaje: " . $mensaje . "\n";

mail($destino, "contacto web", $contenido);

//echo "<div align='center'> ¡El formulario se ha enviado con éxito!.</div><br>";

?>

<div class="container">
    <header class="jumbotron my-4">
        <h1 class="display-1">¡El formulario se ha enviado con éxito!.</h1>
    </header>
    <div class="col-md-12 text-center">
    <p class="volver_home"><a class="btn btn-default btn-lg" href="home_b.php">Volver a la Home</a></p>
        </div>
</div>
</body>
</html>



<footer class="py-5 bg-dark navbar">
    <div class="container_footer">
        <p class="m-0 text-center text-white">© 2016-2018 Handmade Presents</p>
    </div>
</footer>

</body>
</html>

