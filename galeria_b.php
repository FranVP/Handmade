<!DOCTYPE html>
<?php
include('_conbbdd.php');
?>
<html lang="en">
<head>
    <title>Galería</title>
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

        footer {
            margin-top: 5px;
            background-color: #000000;
            color: white;
            padding: 5px;
        }
        .item{
            margin-left:10% ;
            margin-right: 10%;
            padding: 5px;
        }
        .container{
            margin-top: 5px;
            margin-bottom:10px;
        }
        .jumbotron{
            margin-top: 5px;
            text-align: center;

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
                <li class="active"><a href="galeria_b.php">Galería</a></li>
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
        <p class="lead">Galería de algunos de nuestros productos hechos a mano.</p>
        <p class="lead">Aquí podras hacerte una idea de lo que nos puedes pedir.</p>
    </header>
</div>
<div class="container center">
    <div class="row">
        <div class="col-xs-12">
            <div class="carousel slide" id="carousel-58560">
                <!-- Indicadores -->
                <ol class="carousel-indicators">
                    <?php
                    $control_activo = 2;
                    $control_num_slide = 1;
                    $result_carousel = "SELECT * FROM imagenes WHERE estado ='visible' ORDER BY posicion ASC";
                    $resultado_carousel = mysqli_query($conexion, $result_carousel);
                    while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
                        if($control_activo == 2){ ?>
                            <li data-slide-to="0" data-target="#carousel-58560" class="active"></li><?php
                            $control_activo = 1;
                        }else{?>
                        <li data-target="#carousel-58560" data-slide-to="<?php echo $control_num_slide; ?>"></li><?php
                            $control_num_slide++;
                        }
                    }
                    ?>
                </ol>

                <!-- SLIDE -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $control_activo = 2;
                    $result_carousel = "SELECT * FROM imagenes WHERE estado ='visible' ORDER BY posicion ASC";
                    $resultado_carousel = mysqli_query($conexion, $result_carousel);
                    while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
                        if($control_activo == 2) {?>
                            <div class="item active">
                            <img src="fotos/<?php echo $row_carousel['archivo']; ?>" alt="<?php echo $row_carousel['nombre']; ?>">
                            </div><?php
                            $control_activo = 1;
                        }else{ ?>
                            <div class="item">
                                <img src="fotos/<?php echo $row_carousel['archivo']; ?>" alt="<?php echo $row_carousel['nombre']; ?>">
                            </div> <?php
                        }
                    }
                    ?>
                </div>
                <a class="left carousel-control" href="#carousel-58560" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-58560" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>
</div>

<footer class="py-5 bg-dark navbar">
    <div class="container_footer">
        <p class="m-0 text-center text-white">© 2016-2017 Handmade Presents</p>
    </div>
</footer>

</body>
</html>