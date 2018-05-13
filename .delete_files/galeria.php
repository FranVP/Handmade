<?php
include('_conbbdd.php');
?>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Galeria</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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
                <li><a href="../nosotros.php">Nosotros</a></li>
                <li><a href="contacta.php">Contacta</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../loginPedido.php">Pedidos</a></li>
            </ul>
        </div>
    </div>
</nav>
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

<!--
-->
<div class="footer">
    <div class="row">
        <div class="col-xs-12 col-sm-9">
            © 2016-2017 Handmade Presents
            <a href="home.php">Home</a>
            <a href="../nosotros.php">Nosotros</a>
            <a href="contacta.php">Contacta</a>
        </div>
    </div>
</div>
<script src="../js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>