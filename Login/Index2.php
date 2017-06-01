<?php

//conexion con la Api
require_once 'src/Facebook/Facebook.php';

$config = array();

$config["appId"] = '1218331878194920';
$config["secret"] = '6ca7c4fc1087c2a73a7ee2d75bb768dd';
$config["fileUpload"] = false;


$facebook = new Facebook($config);

//Extraer datos del usuario
$user=$facebook->getUser();
echo $user;

$datos= $facebook->api("/me");
var_dump($datos);

//autorizacion a la aplicacion

?>
<a href="<?php echo $facebook->getLoginUrl();?>">Login con Facebook</a>