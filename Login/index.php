<?php
require_once 'src/Facebook/autoload.php';

if (!session_id()) {
    session_start();
}
$fb = new Facebook\Facebook([
    'app_id' => '1218331878194920',
    'app_secret' => '6ca7c4fc1087c2a73a7ee2d75bb768dd',
    'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email'];
$loginUrl = $helper->getLoginUrl('http://localhost:63342/handmade/Handmade/login/facebook_login.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>
<html>
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
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="pedidos.php">Pedidos</a></li>
                <li><a href="galeria.php">Galeria</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>


<body><fb:login-button scope="public_profile,email" onlogin="validarUsuario();">Entrar con Facebook</fb:login-button>  </body>

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';



</div>
<div class="modal-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-9">
            © 2016-2017 Handmade Presents
            <a href="home.php">Home</a>
            <a href="nosotros.php">Nosotros</a>
            <a href="pedidos.php">Pedidos</a>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>