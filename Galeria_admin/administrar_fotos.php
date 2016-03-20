<?php
include ('_setup.php');
$id = $_GET['id'];

$filas = mysqli_query($conexion, "SELECT ID_FOTO, ARCHIVO, NOMBRE, ESTADO FROM imagenes WHERE FKGALERIA='$id' ORDER BY POSICION ASC")or die("Error: ".mysqli_error($conexion));;


?>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        label{display: block;}
    </style>
</head>
<body>
    <h1>Panel de control</h1>
    <h2>Administrador de fotos</h2>

    <h3>ORDENAR LAS FOTOS</h3>
    <form id="fotos" method="post" action="administrar_fotos_ordenar.php"><?php
    while ($columna = mysqli_fetch_assoc($filas)) {

        echo '<div>';
        echo "<p>$columna[NOMBRE] <a href='#'>subir</a>  <a href='#'>bajar</a> </p>";
        echo "<img src='../fotos/$columna[ARCHIVO]' height='100' />";
        echo "<input type='hidden' name='posicion[]' value='$columna[ID_FOTO]'/>";
        echo '<hr />';
        echo '</div>';
    }

    ?><input type="submit" id="guardar_posicion" value="Guardar cambios" />
    <input type="hidden" name="id_galeria" value="<?php echo id; ?>"/></form>
    <script type="text/javascript">
        var form = document.getElementById('fotos');
        var divs = form.getElementsByTagName('div');
        for( var i = 0; i < divs.length; i++){
            var botones = divs[i].getElementsByTagName('a');
            var btn_subir = botones[0];
            var btn_bajar = botones[1];

                btn_subir.onclick = function(){
                    var div = this.parentNode.parentNode;
                    var anterior = div.previousSibling;
                    if (anterior != null){
                        div.parentNode.insertBefore(div, anterior);
                    }
                }
                btn_bajar.onclick = function(){
                    var div = this.parentNode.parentNode;
                    var siguiente = div.nextSibling;
                    if (siguiente != null && siguiente.id != 'guardar_posicion'){
                        div.parentNode.insertBefore(siguiente, div);
                    }
                }
        }
    </script>

<hr />
    <h3>SUBIR FOTOS NUEVAS</h3>

    <form method="post" enctype="multipart/form-data" action="administrar_foto_upload.php">
        <input type="hidden" name="id_galeria" value="<?php echo $id; ?>"/>
        <div>
            <label>Titulo</label>
            <input type="text" name="titulo"/>
            <label>Archivo</label>
            <input type="file" name="archivo"/>
        </div>
        <input type="submit" value="agregar fotos"/>
    </form>
</body>

</html>