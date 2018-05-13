<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
            text-align: center;
            color: red;

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
                <li><a href="loginPedido_b.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <header class="jumbotron my-4">
        <h1>Parece que algo no funciona bien</h1>
        <p>Vuelve a la pagina anterior  y vuelve a probar</p>
        <?php
        error_reporting(0);
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

        header('Location: pedidos_b.php');
        ?>

    </header>
</div>


<footer class="py-5 bg-dark navbar">
    <div class="container_footer">
        <p class="m-0 text-center text-white">© 2016-2018 Handmade Presents</p>
    </div>
</footer>

</body>
</html>