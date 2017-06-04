<?php
    final class Login extends Conexion{
        function logear($usuario,$contraseña){
            $sql = "SELECT * FROM login WHERE usuario = ? AND password = ?";
            $sentencia_select = $this->obj_con->prepare($sql);
            $sentencia_select->bindParam(1,$usuario);
            $sentencia_select->bindParam(2,$contraseña);
            $sentencia_select->execute();
            $conteo = $sentencia_select->rowCount();
            if($conteo > 0){
                return true;
            }else{
                return false;
            }
        }
}