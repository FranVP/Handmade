<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Login</title>
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
                <li><a href="pedidos.php">Pedidos</a></li>
                <li><a href="galeria.php">Galeria</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>
<div class="container">
    <section>
        <div class="col-md-12 ">
            <div class="panel panel-default">
                 <div class="panel-body">
                     <form class="form-horizontal" method="post">
                         <div class="text-center">
                             <h1>Nuevo Usuario</h1>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Nombre:</label>
                             <div class="col-md-3">
                                 <input type="text" name="name" class="form-control" placeholder="Escribe tu Nombre" required>
                             </div>

                             <label class="col-md-1 control-label">Apellido:</label>
                             <div class="col-md-3">
                                 <input type="text" name="lname" class="form-control" placeholder="Escribe tu Apellido" required>
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Email:</label>
                             <div class="col-md-3">
                                 <input type="text" name="name" class="form-control" placeholder="Escribe tu email" required>
                             </div>

                             <label class="col-md-1 control-label">Teléfono:</label>
                             <div class="col-md-3">
                                 <input type="text" name="lname" class="form-control" placeholder="Escribe tu Teléfono" required>
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Usuario:</label>
                             <div class="col-md-3">
                                 <input type="text" name="user" class="form-control" placeholder="Escribe tu usuario" required>
                             </div>

                             <label class="col-md-1 control-label">Contraseña:</label>
                             <div class="col-md-3">
                                 <input type="password" name="pass" class="form-control" placeholder="Escribe tu contraseña"required>
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="col-md-12 text-center">
                                 <button class="btn btn-info" type="submit" >Registrar</button>
                             </div>
                         </div>
                     </form>
                     <form class="form-horizontal" method="post">
                         <div class="text-center">
                             <h1>Usuario</h1>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Usuario:</label>
                             <div class="col-md-3">
                                 <input type="text" name="us" class="form-control" placeholder="Escribe tu usuario" required>
                             </div>

                             <label class="col-md-1 control-label">Contraseña:</label>
                             <div class="col-md-3">
                                 <input type="password" name="pass" class="form-control" placeholder="Escribe tu contraseña"required>
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="col-md-12 text-center">
                                 <button class="btn btn-info" type="submit"  name="login" >Logear</button>
                             </div>
                         </div>
                     </form>
                 </div>
            </div>
        </div>
    </section>

    <?php
        if(isset($_REQUEST["login"])){
            $usuario = $_REQUEST["us"];
            $password = $_REQUEST["pass"];
            require("./_conexionLogin.php");
            require("./logearPedido.php");
            $obj = new Login();
            if($obj->conectar()){
                if($obj->logear($usuario,$password)){
                    echo"<script>alert('exito');</script>";

                }
                else{
                    echo"<script>alert('Usuario o contraseña incorrecta');</script>";
                }
            }
            else{
                echo "Error de conexion";
            }
        }
    ?>






    </div>
</div>
<div class="footer">
    <div class="row">
        <div class="col-xs-12 col-sm-9">
    © 2016-2017 Handmade Presents
    <a href="home.php">Home</a>
            <a href="nosotros.php">Nosotros</a>
            <a href="pedidos.php">Pedidos</a>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>