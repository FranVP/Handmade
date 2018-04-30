<?php
include ('_conbbdd.php');
$resultado = mysqli_query($conexion, "SELECT n_pedido, nombre,apellido,email,telefono,direccion,numero,piso,codigopostal,descripcion,estado FROM pedidos")or die("Error: ".mysqli_error($conexion));;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Historial</title>
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
                <li><a href="home_b.php">Home</a></li>
                <li><a href="nosotros_b.php">Nosotros</a></li>
                <li><a href="galeria_b.php">Galería</a></li>
                <li><a href="contacta_b.php">Contacta</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="pedidos_b.php"><span class="glyphicon glyphicon-log-in"></span> Pedidos</a></li>
            </ul>
        </div>
    </div>
</nav>




<div class="container">
    <h2>Historial</h2>
    <p>Aqui tienes el historial de tus pedidos.</p>
    <div class="table-responsive">
        <table class="table ">

            <tr>
                <th>Nº pedido</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Num</th>
                <th>Piso</th>
                <th>C.P.</th>
                <th>Descripción</th>
                <th>Estado Pedido</th>
            </tr>
            <?php
            while( $fila = mysqli_fetch_assoc( $resultado )){
                echo "<tr>";
                echo "<td>$fila[n_pedido]</td>";
                echo "<td>$fila[nombre]</td>";
                echo "<td>$fila[apellido]</td>";
                echo "<td>$fila[email]</td>";
                echo "<td>$fila[telefono]</td>";
                echo "<td>$fila[direccion]</td>";
                echo "<td>$fila[numero]</td>";
                echo "<td>$fila[piso]</td>";
                echo "<td>$fila[codigopostal]</td>";
                echo "<td>$fila[descripcion]</td>";
                echo "<td>$fila[estado]</td>";
                echo "<td> <a href='editar_pedido.php?id=$fila[n_pedido]'>editar</a> </td>";
                echo "<tr>";
            }
            ?>

        </table>
    </div>
</div>

<footer class="py-5 bg-dark navbar">
    <div class="container_footer">
        <p class="m-0 text-center text-white">© 2016-2017 Handmade Presents</p>
    </div>
</footer>

<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>