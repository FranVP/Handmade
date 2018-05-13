<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <style>
        body{
            background: linear-gradient(#000000,dimgray,grey,darkgray,#c0c0c0,lightgray )
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">HANDMADE PRESENTS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="galeria.php">Galeria</a></li>
                        <li><a href="contacta.php">Contacta</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../loginPedido.php">Pedidos</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img alt="Bootstrap Thumbnail First" src="../img/quien_somos.jpg" />
                            <div class="caption">
                                <h3>
                                    Quien somos
                                </h3>
                                <p>
                                    Encuentra toda la información sobre nosotros, donde nació la idea de handmade presents y en donde están nuestras oficinas.
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="../nosotros.php">Quien Somos</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img alt="Bootstrap Thumbnail Second" src="../img/Galeria_home.png" />
                            <div class="caption">
                                <h3>
                                    Visita nuestra Galería
                                </h3>
                                <p>
                                    En nuestra Galería podrás encontrar todos nuestros productos. Tanto los que tenemos, como los que hemos tenido.
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="../galeria.php">Galería</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img alt="Bootstrap Thumbnail Third" src="../img/Contacta_home.jpg" />
                            <div class="caption">
                                <h3>
                                    Contacta con nosotros
                                </h3>
                                <p>
                                    Has visto algún producto que te gusta y no tenemos actualmente, tienes una idea y quieres saber si podríamos hacerlo...
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="../contacta.php">Contacta</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                © 2016-2017 Handmade Presents
                <a href="../nosotros.php">Nosotros</a>
                <a href="../galeria.php">Galeria</a>
                <a href="../contacta.php">Contacta</a>
            </div>
        </div>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
