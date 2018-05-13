<?php
if(isset($_REQUEST["login"])){
    $usuario = $_REQUEST["us"];
    $contraseña = $_REQUEST["pass"];
    require("./_conexionLogin.php");
    require("./logearPedido.php");
    $obj = new Login();
    if($obj->conectar()){
        if($obj->logear($usuario,$contraseña)) {
            //echo"<script>alert('exito');</script>";
            echo "<script > location.href='pedidos_b.php';</script>";
        }
        else{
            echo"<script>alert('Usuario o contraseña incorrecta');</script>";
            echo "<script> location.href='loginPedido_b.php' ;</script>";
        }
    }
    else{
        echo "Error de conexion";
    }
}
?>