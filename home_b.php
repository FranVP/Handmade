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
        .row.content {height: 450px}

        .sidenav {
            padding-top: 5px;
            background-color: #f1f1f1;
            height: 100%;
        }
        .thumbnail{
            padding-top: 5px;
            padding-bottom: 5px;
            margin-bottom: 5px;
            background-color: #f1f1f1;
            height: 100%;
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
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 10px;
            }
            .row.content {height:auto;}
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
                <li><a href="loginPedido_b.php"><span class="glyphicon glyphicon-log-in"></span> Pedidos</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <header class="jumbotron my-4">
        <h1 class="display-1">Bienvenidos a Handmade</h1>
        <p class="lead">Tu tienda online de productos hechos a mano.</p>
    </header>
</div>

<div class="container">
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-4 sidenav">
                <div class="thumbnail">
                    <img alt="Bootstrap Thumbnail First" src="img/quien_somos.jpg" />
                    <div class="caption">
                        <h3>Quien somos</h3>
                        <p>Encuentra toda la información sobre nosotros, donde nació la idea de handmade presents y en donde están nuestras oficinas.</p>
                        <p><a class="btn btn-primary" href="nosotros_b.php">Quien Somos</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 sidenav">
                <div class="thumbnail">
                    <img alt="Bootstrap Thumbnail Second" src="img/Galeria_home.png" />
                    <div class="caption">
                        <h3>Visita nuestra Galería</h3>
                        <p>En nuestra Galería podrás encontrar todos nuestros productos. Tanto los que tenemos, como los que hemos tenido.</p>
                        <p><a class="btn btn-primary" href="galeria_b.php">Galería</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 sidenav">
                <div class="thumbnail">
                    <img alt="Bootstrap Thumbnail Third" src="img/Contacta_home.jpg" />
                    <div class="caption">
                        <h3>Contacta con nosotros</h3>
                        <p>Has visto algún producto que te gusta, tienes una idea y quieres saber si podríamos hacerlo...</p>
                        <p><a class="btn btn-primary" href="contacta_b.php">Contacta</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="py-5 bg-dark navbar">
    <div class="container_footer">
        <p class="m-0 text-center text-white">© 2016-2018 Handmade Presents</p>
    </div>
</footer>

</body>
</html>


