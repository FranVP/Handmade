<?php
include ('_setup.php');
$id = $_GET['id'];

$filas = mysqli_query($conexion, "SELECT ID_FOTO, ARCHIVO, NOMBRE, ESTADO FROM imagenes WHERE FKGALERIA='$id' ORDER BY POSICION ASC")or die("Error: ".mysqli_error($conexion));;

?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Panel de control</h1>
<h2>Administrador de fotos</h2>
<h3>ORDENAR LAS FOTOS</h3>
<form id="fotos" method="post" action="administrar_fotos_ordenar.php"><?php
    $cantidad = 0;
    while ($columna = mysqli_fetch_assoc($filas)) {
        $cantidad++;
        echo '<div>';
        echo "<p>$columna[NOMBRE] <a href='#'>subir</a>  <a href='#'>bajar</a> </p>";
        echo "<img src='../fotos/$columna[ARCHIVO]' height='100' />";
        echo "<input type='hidden' name='posicion[]' value='$columna[ID_FOTO]'/>";
        echo '<hr />';
        echo '</div>';
    }
    ?>
    <p><a class="btn btn-primary" href="nueva_galeria.php">Crear una galeria</a></p>
    <input class="btn btn-primary" type="submit" id="guardar_posicion" value="Guardar cambios" />
    <input type="hidden" name="id_galeria" value="<?php echo $id; ?>"/></form>
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
    <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>" />

    <div id="inputs_file">
        <div>
            <label>Titulo</label>
            <input type="text" name="titulo[]"/>
            <label>Archivo</label>
            <input type="file" name="archivo[]"/>
        </div>
    </div>
    <input type="submit" value="agregar fotos"/>
    <input type="button" id='otra_foto' value="+ fotos" />
    <script type="text/javascript">
        var boton = document.getElementById('otra_foto');
        boton.onclick = function(){
            var div_cont = document.createElement('div');
            var label1 = document.createElement('label');
            label1.innerHTML = ' Titulo ';
            var input1 = document.createElement('input');
            input1.type = 'text';
            input1.name = 'titulo[]';
            var label2 = document.createElement('label');
            label2.innerHTML = ' Archivo ';
            var input2 = document.createElement('input');
            input2.type = 'file';
            input2.name = 'archivo[]';

            var div = document.getElementById('inputs_file');

            div_cont.appendChild(label1);
            div_cont.appendChild(input1);
            div_cont.appendChild(label2);
            div_cont.appendChild(input2);

            div.appendChild(div_cont);
        }
    </script>
</form>
</body>
</html>