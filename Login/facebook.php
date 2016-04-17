<?php

require_once('Login/src/facebook.php');

$facebook = new Facebook(array(
    "appId"=>"1218331878194920",
    "secret"=>"6ca7c4fc1087c2a73a7ee2d75bb768dd"
));

$url = $facebook->getLoginUrl(array('redirect_uri'=>"http://localhost:63342/handmade/Handmade/login/facebook_login.php"));


?>

<a href="<?php echo $url;?>">Login con facebook</a>