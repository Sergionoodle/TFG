<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HardFilms</title>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <!--SCRIPT BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
    <script src="/node_modules/spur-template/dist/js/spur.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        .btn-color,
        .btn-log,
        .btn-regist {
            border: 1px solid rgba(0, 0, 0, 0.486);
            background-color: rgba(255, 255, 255, 0.562);
            border-radius: 5px;
        }

        .logo {
            margin-left: 5px;
        }

        .btn-color {
            margin-top: 8px;

        }

        .navbar {
            background-color: #333333;
        }

        /*FORMULARIO*/

        @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

        .formulario {
            margin: 0;
            padding: 0;
            background: #fff;

            color: #fff;
            font-family: Arial;
            font-size: 12px;
        }

        .body {
            position: absolute;
            top: -20px;
            left: -20px;
            right: -40px;
            bottom: -40px;
            width: auto;
            height: auto;
            background-image: url(https://www.adslzone.net/app/uploads-adslzone.net/2018/04/IMAXNewTheater.jpg);
            background-size: cover;
            -webkit-filter: blur(5px);
            z-index: 0;
        }

        .grad {
            position: absolute;
            top: -20px;
            left: -20px;
            right: -40px;
            bottom: -40px;
            width: auto;
            height: auto;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, 0.65)));
            /* Chrome,Safari4+ */
            z-index: 1;
            opacity: 0.7;
        }

        .header {
            position: absolute;
            top: calc(50% - 35px);
            left: calc(50% - 255px);
            z-index: 2;
        }

        .header div {
            float: left;
            color: #fff;
            font-family: 'Exo', sans-serif;
            font-size: 35px;
            font-weight: 200;
        }

        .header div span {
            color: blue !important;
        }

        .login {
            position: absolute;
            top: calc(50% - 75px);
            left: calc(50% - 50px);
            height: 150px;
            width: 350px;
            padding: 10px;
            z-index: 2;
        }

        .login input[type=text] {
            width: 250px;
            height: 30px;
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 2px;
            color: #fff;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
        }

        .login input[type=password] {
            width: 250px;
            height: 30px;
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 2px;
            color: #fff;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
            margin-top: 10px;
        }

        .login input[type=button] {
            width: 260px;
            height: 35px;
            background: #fff;
            border: 1px solid #fff;
            cursor: pointer;
            border-radius: 2px;
            color: #a18d6c;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 6px;
            margin-top: 10px;
        }

        .boton:active {
            opacity: 0.8;
        }

        .boton:hover{
            opacity: 0.6;
        }

        .login input[type=text]:focus {
            outline: none;
            border: 1px solid rgba(255, 255, 255, 0.9);
        }

        .login input[type=password]:focus {
            outline: none;
            border: 1px solid rgba(255, 255, 255, 0.9);
        }

        .login input[type=button]:focus {
            outline: none;
        }

        ::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        ::-moz-input-placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .boton {
            width: 260px;
            height: 35px;
            background: #fff;
            border: 1px solid #fff;
            cursor: pointer;
            border-radius: 2px;
            color: #a18d6c;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 6px;
            margin-top: 10px;
        }
    </style>



</head>
<script>
    /*MODO OSCURO Y NORMAL*/
    $(document).ready(function () {
        $(".btn-color").click(function () {
            if ($(this).text() == "Modo Oscuro") {
                $(this).text("Modo Normal")
                $("body").css("background-color", "#333333")
                $(".navbar").css("background-color", "black")
                $(".logo").replaceWith('<img class="logo" src="../img/hardfilmsred.png" width="100px">')
                $(".titulo").css("color", "black")
                $(".titulo").css("text-shadow", "-1px -1px 1px rgb(255, 255, 255), 1px 1px 1px rgb(255, 255, 255), -1px 1px 1px rgb(255, 255, 255), 1px -1px 1px rgb(255, 255, 255)")
                $(".informacion").css("color", "white")
                //Cuando esta cambiado le pone el color de nuevo si pulsas el Light mode
            } else {
                $(this).text("Modo Oscuro")
                $("body").css("background-color", "white")
                $(".navbar").css("background-color", "#333333")
                $(".logo").replaceWith('<img class="logo" src="../img/hardfilms white.png" width="100px">'),
                    $(".titulo").css("color", "white")
                $(".titulo").css("text-shadow", "-1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000")
                $(".informacion").css("color", "#343a40")

            }
        });
    })
</script>

<body>

<!--NAVAR-->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <!--Te lleva a un videojuego como easter egg-->

    <!--ENVIO A LA PAGINA PRINCIPAL-->
    <a class="navbar-brand" id="logo" href="../controlador/controlador_principal.php"><img class="logo"
                                                                                           src="../img/hardfilms white.png" width="100px"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <!--Modo oscuro-->
            <li class="nav-item">
                <button class="btn-color" id="btn-color">Modo Oscuro</button>
            </li>
        </ul>

    </div>
    <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
        <ul class="navbar-nav text-right">
            <!--Login-->
            <li class="nav-item float-right">
                <a class="nav-link" href="../controlador/controlador_login.php"><button class="btn-log">Log in</button></a>
            </li>
        </ul>
    </div>
</nav>

<div class="formulario">
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
        <div>Hard<span>Films</span></div>
    </div>
    <br>
    <div class="login">
        <form action="" method="post" name="register">
            <input type="text" placeholder="username" name="user" id="user" required><br>
            <br>
            <input type="text" placeholder="email" name="email" id="email" required><br>
            <input type="password" placeholder="password" name="password" id="password" required><br>
            <!--Si no envia cambiar por un boton-->
            <button type="submit" class="boton" name="registrar">Register</button>

        </form>
    </div>
</div>

</body>

</html>