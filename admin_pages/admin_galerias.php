<?php
include('_setup.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Galeria</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php
$resultado = mysqli_query($conexion, "SELECT ID_GALERIA, TITULO, DESCRIPCION, FECHA_ALTA FROM galerias");
?>

<div class="container">
    <form class="form-horizontal" method="post">
        <h2>Galerias</h2>
        <p><a class="btn btn-primary" href="nueva_galeria.php">Crear una galeria</a></p>
        <div class="table-responsive">
            <table class="table ">
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha alta</th>
                    <th>Botones accion</th>
                </tr>
                <?php
                while( $fila = mysqli_fetch_assoc( $resultado )){
                    echo "<tr>";
                    echo "<td>$fila[TITULO]</td>";
                    echo "<td>$fila[DESCRIPCION]</td>";
                    echo "<td>$fila[FECHA_ALTA]</td>";
                    echo "<td> <a href='editar_galeria.php?id=$fila[ID_GALERIA]'>editar</a> | <a href='borrar_galeria.php?id=$fila[ID_GALERIA]'>borrar </a>|<a href='administrar_fotos2.php?id=$fila[ID_GALERIA]'> administrar fotos</a></td>";
                    echo "<tr>";
                }
                ?>
            </table>
        </div>
</div>
<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
