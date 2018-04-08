<!DOCTYPE html>
<html>
<script>

    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        if (response.status === 'connected') {
            location.href='pedidos.php';
        } else if(response.status == 'not_authorized') {
            alert('Debes autorizar la app!');
        } else {
            alert('No has entrado con tu cuenta de Facebook! Supongo que prefieres el Formulario');
        }
    }

    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1218331878194920',
            cookie     : true,  // enable cookies to allow the server to access
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.8' // use graph api version 2.8
        });

        // Now that we've initialized the JavaScript SDK, we call
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            console.log('Successful login for: ' + response.name);
            document.getElementById('status').innerHTML =
                'Thanks for logging in, ' + response.name + '!';
        });
    }
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


</script>
<html lang="en">
<head>
    <title>Contacta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="../Handmade/js/fontawesome-all.js"></script>
    <style>
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        footer {
            margin-top: 5px;
            background-color: #000000;
            color: white;
            padding: 5px;
        }

        .container{
            margin-top: 5px;
            margin-bottom:10px;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">HANDMADE</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="home_b.php">Home</a></li>
                <li><a href="nosotros_b.php">Nosotros</a></li>
                <li><a href="galeria_b.php">Galería</a></li>
                <li><a href="contacta_b.php">Contacta</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="loginPedido_b.php"><span class="glyphicon glyphicon-log-in"></span> Pedidos</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <section>
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <!--FORMULARIO DE ALTA USUARIO -->
                    <form class="form-horizontal" method="post" action="loginPedido_add_reg.php">
                        <div class="text-center">
                            <h2>Nuevo Usuario</h2>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nombre:</label>
                            <div class="col-md-3">
                                <input type="text" name="name" class="form-control" placeholder="Escribe tu Nombre" required>
                            </div>
                            <label class="col-md-1 control-label">Apellido:</label>
                            <div class="col-md-3">
                                <input type="text" name="lname" class="form-control" placeholder="Escribe tu Apellido" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email:</label>
                            <div class="col-md-3">
                                <input type="text" name="email" class="form-control" placeholder="Escribe tu email" required>
                            </div>
                            <label class="col-md-1 control-label">Teléfono:</label>
                            <div class="col-md-3">
                                <input type="text" name="telef" class="form-control" placeholder="Escribe tu Teléfono" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Usuario:</label>
                            <div class="col-md-3">
                                <input type="text" name="user" class="form-control" placeholder="Escribe tu usuario" required>
                            </div>
                            <label class="col-md-1 control-label">Contraseña:</label>
                            <div class="col-md-3">
                                <input type="password" name="password" class="form-control" placeholder="Escribe tu contraseña"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-info" type="submit" >Registrar</button>
                            </div>
                        </div>
                    </form>
                    <!--FORMULARIO DE LOGIN -->
                    <form class="form-horizontal" method="post">
                        <div class="text-center">
                            <h2>Usuario</h2>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Usuario:</label>
                            <div class="col-md-3">
                                <input type="text" name="us" class="form-control" placeholder="Escribe tu usuario" required>
                            </div>
                            <label class="col-md-1 control-label">Contraseña:</label>
                            <div class="col-md-3">
                                <input type="password" name="pass" class="form-control" placeholder="Escribe tu contraseña"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-info" type="submit"  name="login" >Logear</button>
                            </div>
                        </div>
                        <div class="text-center">
                            <h2> O con Facebook</h2>
                        </div>

                        <div class="fb-login-button col-md-12 text-center" align="center" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"scope="public_profile,email" onlogin="checkLoginState();"></div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    if(isset($_REQUEST["login"])){
        $usuario = $_REQUEST["us"];
        $contraseña = $_REQUEST["pass"];
        require("./_conexionLogin.php");
        require("./logearPedido.php");
        $obj = new Login();
        if($obj->conectar()){
            if($obj->logear($usuario,$contraseña)){
                echo"<script>alert('exito');</script>";
                echo"<script>location.href='pedidos_b.php';</script>";
            }
            else{
                echo"<script>alert('Usuario o contraseña incorrecta');</script>";
            }
        }
        else{
            echo "Error de conexion";
        }
    }
    ?>
</div>
</div>
<footer class="py-5 bg-dark navbar">
    <div class="container_footer">
        <p class="m-0 text-center text-white">© 2016-2017 Handmade Presents</p>
    </div>
</footer>

<script src="js/jquery.js"></script>
</body>
</html>