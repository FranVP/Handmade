<html>
<script>
    (function(d,s,id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if(d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "http://connect.facebook.net/es_ES/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    window.fbAsyncInit = function() {
        FB.init({
            appId    : '1218331878194920',
            cookie   : true,
            xfbml    : true,
            version  : 'v2.5'
        });
    }
    function validarUsuario() {
        FB.getLoginStatus(function(response) {
            if(response.status == 'connected') {
                alert('Bienvenido!');
            } else if(response.status == 'not_authorized') {
                alert('Debes autorizar la app!');
            } else {
                alert('Debes ingresar a tu cuenta de Facebook!');
            }
        });
    }
</script>
<head lang="es">
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="pedidos.php">Pedidos</a></li>
                <li><a href="galeria.php">Galeria</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>


<body><fb:login-button scope="public_profile,email" onlogin="validarUsuario();">Entrar con Facebook</fb:login-button>  </body>




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
