<?php
abstract class Conexion{
    private static $gestor;
    private static $servidor;
    private static $usuario;
    private static $contraseña;
    private static $db;
    private static $puerto;
    public  $obj_con;

    function __construct(){
        self::$gestor ="mysql";
        self::$servidor ="localhost";
        self::$usuario ="root";
        self::$contraseña ="";
        self::$db ="handmade";
        self::$puerto ="3306";
    }
    function conectar(){
        try{
            $this->obj_con = new PDO(self::$gestor.':host='.self::$servidor.';dbname='
                .self::$db. ';port='.self::$puerto,self::$usuario,self::$contraseña);
                return true;
        }
        catch(PDOException $e){
            return false;
        }
    }
    function __destruct(){
        unset($this);
        $this->obj_con = null;
    }
}
?>