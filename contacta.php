<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head lang="es">
    <meta charset="UTF-8">
    <title>Contacta</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style>
        body {
            background-color: #b6abff
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Cambiar Navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">HANDMADE PRESENTS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="galeria.php">Galeria</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="loginPedido.php">Pedidos</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="contactaSendMail.php" method="post">
                    <fieldset>
                        <legend class="text-center header">Contacta con Nosotros</legend>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>

                            <div class="col-md-10">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control"
                                       required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>

                            <div class="col-md-10">
                                <input id="lname" name="lname" type="text" placeholder="Apellidos" class="form-control"
                                       required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>

                            <div class="col-md-10">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control"
                                       required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>

                            <div class="col-md-10">
                                <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control"
                                       required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>

                            <div class="col-md-10">
                                <textarea class="form-control" id="message" name="message"
                                          placeholder="Introduce tu consulta." rows="10" maxlength="1500"
                                          required="required"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input type="submit" value="Enviar" class="btn btn-primary btn-lg"></input>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
error_reporting(0);
$name = $_POST["name"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
?>

<div class="modal-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-9">
            © 2016-2017 Handmade Presents
            <a href="home.php">Home</a>
            <a href="nosotros.php">Nosotros</a>
            <a href="galeria.php">Galeria</a>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>