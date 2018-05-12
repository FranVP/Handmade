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
            </button>
            <a class="navbar-brand">HANDMADE ADMIN</a>
        </div>
    </div>
</nav>
<div class="container">
    <header class="jumbotron my-4">
        <h1 class="display-1">Bienvenidos Administrador</h1>
        <p class="lead">Desde aquí puedes gestionar las galerias y los pedidos</p>
    </header>
</div>


<div class="container">
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-4 sidenav">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Galerias</h3>
                        <p>Administra todo lo relacionado con las galerias</p>
                        <p><a class="btn btn-primary" href="admin_galerias.php">Galerias</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 sidenav">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Pedidos</h3>
                        <p>Gestiona los pedidos de tus usuarios</p>
                        <p><a class="btn btn-primary" href="admin_pedidos.php">Pedidos</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</div>
</div>
<script src="js/jquery.js"></script>
</body>
</html>

