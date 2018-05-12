<!DOCTYPE html>
<html>
<head>
    <title>Admin Fotos</title>
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
            margin-top: 50px;
            margin-bottom:50px;
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
                <li><a href="admin_galerias.php">Galerias</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php
include ('_setup.php');
$id = $_GET['id'];
$filas = mysqli_query($conexion, "SELECT ID_FOTO, ARCHIVO, NOMBRE, ESTADO FROM imagenes WHERE FKGALERIA='$id' ORDER BY POSICION ASC")
or die("Error: ".mysqli_error($conexion));
?>


<div class="container">
    <header class="jumbotron my-4">
        <h1 class="display-1">Administrador de fotos</h1>
        <p class="lead">Aquí puedes subir y editar el estado</p>
    </header>
</div>
<div class="container">
    <div class="well well-sm">SUBIR FOTOS NUEVAS</div>

<form method="post" enctype="multipart/form-data" action="administrar_foto_upload.php">
    <input type="hidden" name="id_galeria" value="<?php echo $id; ?>"/>
    <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>" />

    <div id="inputs_file">
        <div class="form-group">
            <span class="col-md-1 text-center"></span>
            <div class="col-md-4">
                <label>Titulo</label>
                <input type="text" name="titulo[]"/>
            </div>
            <span class="col-md-1 text-center"></span>
            <div class="col-md-4">
                <label>Archivo</label>
                <input type="file" name="archivo[]"/>
            </div>
        </div>
    </div>
    <input  class="btn btn-primary" type="submit" value="agregar fotos"/>
</form>

</div>
<div class="container">
    <div class="well well-sm">FOTOS DE LA GALERIA</div>
<form id="fotos" method="post" action="administrar_fotos_ordenar.php">
    <div class="container">
        <form class="form-horizontal" method="post">
            <div class="table-responsive">
                <table class="table ">
                    <tr>
                        <th>Nombre imagen</th>
                        <th>Estado</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                    <?php
                    while ($columna = mysqli_fetch_assoc($filas)) {
                        echo "<tr>";
                        echo "<td>$columna[NOMBRE]</td>";
                        echo "<td>$columna[ESTADO]</td>";
                        echo "<td><img src='../fotos/$columna[ARCHIVO]' height='100' /></td>";
                        echo "<td> <a href='admin_fotos_editar.php?id=$columna[ID_FOTO]'>editar</a> | <a href='borrar_foto.php?id=$columna[ID_FOTO]'>borrar </a></td>";
                        echo "<tr>";
                    }
                    ?>

                </table>
            </div>
    </div>



    <input type="hidden" name="id_galeria" value="<?php echo $id; ?>"/>
</form>
</div>

</body>
</html>