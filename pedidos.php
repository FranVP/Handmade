<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Pedidos</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style>
        body{
            background-color: #b6abff}
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
            <a class="navbar-brand" href="home.php">HANDMADE PRESENTS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="galeria.php">Galeria</a></li>
            </ul>
            <!-- <form class="navbar-form navbar-left">
                 <div class="form-group">
                     <input type="text" class="form-control"></div>
                 <button type="submit" class="btn btn-default">Buscar</button>
             </form>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Pedidos</legend>

                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control" required>
                            </div>
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control" required>
                            </div>
                            <span class="col-md-1 text-center"></span>
                            <div class="col-md-4">
                                <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control" required>
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