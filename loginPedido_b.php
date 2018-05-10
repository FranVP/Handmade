<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    window.fbAsyncInit = function() {
        // FB JavaScript SDK configuration and setup
        FB.init({
            appId      : '1218331878194920', // FB App ID
            cookie     : true,  // enable cookies to allow the server to access the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.8' // use graph api version 2.8
        });

        // Check whether the user already logged in
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                //display user data
                getFbUserData();
            }
        });
    };

    // Load the JavaScript SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Facebook login with JavaScript SDK
    function fbLogin() {
        FB.login(function (response) {
            if (response.authResponse) {
                // Get and display the user profile data
                getFbUserData();
            } else {
                document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
            }
        }, {scope: 'email'});
    }

    // Fetch the user profile data from facebook
    function getFbUserData(){
        FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
            function (response) {
                //document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
                //document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
                //document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
                //document.getElementById('userData').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '
                //+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
                //save data
                document.location.href="pedidos_b.php";
                saveUserData(response);
            });
    }


    // Save user data to the database
    function saveUserData(userData){
        $.post('userData.php', {oauth_provider:'facebook',userData: JSON.stringify(userData)}, function(data){ return true; });
    }

    // Logout from facebook
    function fbLogout() {
        FB.logout(function() {
            document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
            document.getElementById('userData').innerHTML = '';
            document.getElementById('status').innerHTML = 'Has salido correctamente';
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
                    <form class="form-horizontal"  action="loginPedido_add_reg.php" method="post">
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
                                <input type="text" name="user" id="us" class="form-control" placeholder="Escribe tu usuario" required>
                            </div>
                            <label class="col-md-1 control-label">Contraseña:</label>
                            <div class="col-md-3">
                                <input type="password" name="password" id="pass" class="form-control" placeholder="Escribe tu contraseña"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-info" type="submit" >Registrar</button>
                            </div>
                        </div>
                    </form>
                    <!--FORMULARIO DE LOGIN -->
                    <form class="form-horizontal" action="pedidos_b.php" method="post">
                        <div class="text-center">
                            <h2>Usuario</h2>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Usuario:</label>
                            <div class="col-md-3">
                                <input type="text" name="us" id="us" class="form-control" placeholder="Escribe tu usuario"  required>
                            </div>
                            <label class="col-md-1 control-label">Contraseña:</label>
                            <div class="col-md-3">
                                <input type="password" name="pass" id="pass" class="form-control" placeholder="Escribe tu contraseña"  required>
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

                        <div href="javascript:void(0);" onclick="fbLogin()" id="fbLink" class="fb-login-button col-md-12 text-center" align="center" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"scope="public_profile,email" onlogin="checkLoginState();"></div>

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
            if($obj->logear($usuario,$contraseña)) {
                echo"<script>alert('exito');</script>";
                //    echo "<script> location.href='pedidos_b.php' ;</script>";
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