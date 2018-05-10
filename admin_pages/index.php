<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <title>Admin Panel</title>
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
    </div>
</nav>
<div class="container">
    <section>
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="validar.php" method="post">
                        <div class="text-center">
                            <h2>Usuario</h2>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Usuario:</label>
                            <div class="col-md-3">
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Escribe tu usuario"  required>
                            </div>
                            <label class="col-md-1 control-label">Contraseña:</label>
                            <div class="col-md-3">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Escribe tu contraseña"  required>
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


</div>
</div>
<script src="js/jquery.js"></script>
</body>
</html>

