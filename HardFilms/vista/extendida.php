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

        .logo{
            margin-left: 5px;
        }

        .btn-color {
    margin-top: 8px;

        }

        .navbar {
    background-color: #333333;
        }

        iframe {
    width: 70%;
    height: 45rem;
            margin: 0 auto;
            display: block;
        }

        .estrella {
    width: 50px;
            margin: 30px 5px 20px 5px;
            position: relative !important;

        }

        .puntuacion {
    margin-left: 20px;
            margin-top: -18px;
        }

        .informacion {
    margin-left: 20px;
            margin-top: 30px;
            margin-bottom: 50px;

        }

        .a {
    display: flex;
    float: left;
}

        .imagen_info {
    width: 250px;
            margin-right: 10px;
            border: 1px solid rgba(0, 0, 0, 0.5);
        }


        /*carrusel pelis*/
        div.items {
    white-space: nowrap;
            flex-flow: row nowrap;
            justify-content: space-between;
            overflow: hidden;
            display: flex;
            align-self: center;
        }

        div.items:hover .item {
    opacity: 0.3;
}

        div.items:hover .item:hover {
    opacity: 1;
}

        div.control-container {
    height: 300px;
            position: absolute;
            width: 100%;
            overflow: hidden;
            box-sizing: border-box;
        }

        div.container {
    -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            min-height: 300px;
            position: relative;
            width: 100%;
            box-sizing: border-box;
            overflow: hidden;
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
        }

        div.left-scroll {
    left: 0;
}

        div.left-scroll i {
    transform: translate(-60%, -50%);
}

        div.right-scroll {
    right: 0;
}

        div.right-scroll i {
    transform: translate(-40%, -50%);
}

        div.scroll {
    position: absolute;
    display: inline-block;
    color: #f6f6f6;
    top: 50%;
    transform: translate(0, -50%);
    width: 60px;
            height: 60px;
            border: 1px solid #f6f6f6;
            border-radius: 60px;
            margin: 0 5px;
            z-index: 951;
        }

        div.scroll i {
    font-size: 30px;
            position: relative;
            left: 50%;
            top: 50%;
        }

        .item {
    position: relative;
    align-self: center;
            width: 200px;
            height: 200px;
            margin: 0 3px;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            z-index: 899;
        }

        .item:hover {
    transform: scale(1.5);
    margin: 30px;
            opacity: 1;
            z-index: 950;
        }

        .item:hover .opacity-none {
    opacity: 1;
}

        .item .item-load-icon {
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

        .item .opacity-none {
    opacity: 0;
}

        .item img.item-image {
    width: 200px;
            height: 200px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .item-image{
            border: 1px solid rgba(0, 0, 0, 0.5);
        }
        .item .item-title {
    color: #f6f6f6;
    position: absolute;
    margin: 5px 0;
            padding: 10px 0;
            width: 100%;
            left: 50%;
            top: 0;
            transform: translate(-50%, 0);
            background: rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .usuario_p{
            margin-left: 10px;
            margin-top: 6px;
        }
        .item .item-description {
    color: #f6f6f6;
    font-size: 12px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translate(-50%, 0);
            white-space: pre-wrap;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            margin: 5px 0;
            padding: 10px 0;
        }

        .button {
    position: absolute;
    color: #f6f6f6;
    font-size: 30px;
            border: 1px solid #f6f6f6;
            width: 60px;
            height: 60px;
            border-radius: 60px;
            z-index: 950;
            background-color: rgba(0, 0, 0, 0.7);
            transition: all 0.3s ease-in-out;
        }

        .button i {
    position: relative;
    top: 40% !important;
    left: 50%;
    transform: translate(-35%, -55%);
    z-index: 950;
        }

        .button:hover {
    box-shadow: 0px 0px 50px #FFFFFF;
        }

        .comentarios {
            text-align: center;
            color: black;
            margin-top: 5px;
            margin-bottom: 50px;
        }

        .comentarios_texto {
            color: black;
            border-top: 1px dashed rgba(92, 92, 92, 0.705);
            margin-left: 10px;
            margin-right: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-bottom: 1px dashed rgba(92, 92, 92, 0.705);


        }

        .logbien{
            width: 80px;
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
                $(".comentarios").css("color", "white")
                $(".comentarios_texto").css("color", "white")

                //Cuando esta cambiado le pone el color de nuevo si pulsas el Light mode
            } else {
                $(this).text("Modo Oscuro")
                $("body").css("background-color", "white")
                $(".navbar").css("background-color", "#333333")
                $(".logo").replaceWith('<img class="logo" src="../img/hardfilms white.png" width="100px">'),
                    $(".titulo").css("color", "white")
                $(".titulo").css("text-shadow", "-1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000")
                $(".informacion").css("color", "#343a40")
                $(".comentarios").css("color", "black")
                $(".comentarios_texto").css("color", "black")



            }
        });
    })
</script>

<body>

    <!--NAVAR-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <!--Te lleva a un videojuego como easter egg-->

        <!--ENVIO A LA PAGINA PRINCIPAL-->
        <a class="navbar-brand" id="logo" href="../controlador/controlador_principal.php"><img class="logo" src="../img/hardfilms white.png" width="100px"></a>

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
                <?php if($_SESSION['log'] == true){
                    echo "<li><p class='usuario_p' style='color: white'>Usuario:  ".$_SESSION['user'].".</p></li>";
                } ?>
            </ul>

        </div>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav text-right">
                <ul class="navbar-nav text-right">
                    <?php
                    if($_SESSION['log'] != true){ ?>
                        <!--Registro-->
                        <li class="nav-item active">
                            <a class="nav-link" href="../controlador/controlador_register.php"><button class="btn-regist" type="submit">Register</button></a>
                        </li>

                        <!--Login-->
                        <li class="nav-item float-right">
                            <a class="nav-link" href="../controlador/controlador_login.php"><button class="btn-log">Log in</button></a>
                        </li>
                    <?php }else{
                        ?>
                        <li class="nav-item float-right">
                            <a class="nav-link" href="../controlador/cerrar_sesion2.php?id=<?php echo $datos->getId();?>"><button class="btn-log">Cerrar Sesion</button></a>
                        </li>
                    <?php } ?>
            </ul>
        </div>
    </nav>

    <!--ESTRELLAS A MULTIPLICAR-->
    <div class="puntuacion">
        <?php
        for($i = 0; $i < $datos->getPuntuacion(); $i++) {
            if($datos->getPuntuacion() <= 5){
                echo '<img class="estrella" src="../img/estrellaroja.png">';
            }else{
                echo '<img class="estrella" src="../img/estrella.png">';

            }
        }
        ?>
    </div>
    <!--IFRAME A MULTIPLICAR-->
    <?php echo $datos->getIdMultimedia()->getTrailer();?>

    <div class="informacion">
        <div class="a">
            <img class="imagen_info" src="../<?php echo $datos->getIdMultimedia()->getImagen();?>" alt="img">
        </div>
        <h3><b>Titulo: </b><?php echo $datos->getTitulo(); ?></h3>
        <h3><b>Año:</b> <?php echo $datos->getAnyo(); ?></h3>
        <h3><b>Director:</b> <?php echo $datos->getIdDirector()->getNombre()?> <?php echo $datos->getIdDirector()->getApellidos()?></h3>
        <h3><b>Actores: </b><?php
            foreach ($datos->getActores() as $actores){
                echo $actores->getNombre()." ".$actores->getApellidos().", ";
            }
            ?></h3>
        <h3><b>Genero: </b> <?php echo $datos->getIdGenero()->getGenero();?></h3>
        <h3><b>Sinopsis: </b> <br> <?php echo $datos->getDescripcion(); ?></h3>
    </div>
    <br>
    <br>
    <div id="carousel" class="container">
        <div class="control-container">
            <div id="left-scroll-button" class="left-scroll button scroll">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div id="right-scroll-button" class="right-scroll button scroll">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>

        <div class="items" id="carousel-items">
            <?php foreach ($slider as $item) {

            ?>
            <div class="item">
                <img class="item-image"
                    src="../<?php echo $item->getIdMultimedia()->getImagen();?>" />
                <span class="item-title"><?php echo $item->getTitulo();?></span>
                <span class="item-load-icon button opacity-none"><a href="../controlador/controlador_extendido.php?id=<?php echo $item->getId();?>"><i class="fa fa-play"></i></a></span>
                <div class="item-description opacity-none">Clicka al PLAY para ir a la pelicula!!</div>
            </div>
            <?php } ?>
        </div>
    </div>


    <div class="comentarios">
        <?php

        if($_SESSION['log'] != true){
            echo '<h1>Para poder comentar logeate <img class="logbien" src="https://i.pinimg.com/originals/3b/ef/73/3bef738000dcd57710828a4218c046ea.gif"></h1>';
        }else{
        ?>
        <h1>Comenta Usuario:</h1>
        <p><?php echo $_SESSION['user']?></p>
        <div class="formulario_comentarios">
            <form name="coment" action="comentario_exito.php" method="post">
                <textarea class="comentario_txt" name="Comentario" id="comentario_text" cols="77" rows="4"
                          maxlength="200"></textarea>
                <span class="help-block">
                    <p id="mensaje_ayuda" class="help-block">Cuerpo del mensaje de alerta</p>
                </span>
                <input type="submit" name="comentar" value="Comenta">
                <script>
                    $('#mensaje_ayuda').text('200 carácteres restantes');
                    $('#comentario_text').keydown(function () {
                        var max = 200;
                        var len = $(this).val().length;
                        if (len >= max) {
                            $('#mensaje_ayuda').text('Has llegado al límite');// Aquí enviamos el mensaje a mostrar
                            $('#mensaje_ayuda').addClass('text-danger');
                            $('#comentario_text').addClass('is-invalid');
                            $('#inputsubmit').addClass('disabled');
                        }
                        else {
                            var ch = max - len;
                            $('#mensaje_ayuda').text(ch + ' carácteres restantes');
                            $('#mensaje_ayuda').removeClass('text-danger');
                            $('#comentario_text').removeClass('is-invalid');
                            $('#inputsubmit').removeClass('disabled');
                        }
                    });
                </script>
            </form>
        </div>
        <?php } ?>
    </div>

    <div>
        <div class="d-flex comentarios_texto">

            <img src="https://i.pinimg.com/236x/35/f6/71/35f6716adc65383508eca7cfda5b5594.jpg" alt="John Doe"
                 class="me-3 rounded-circle" style="width: 100px; height: 100px; border: black 1px solid;" />

            <div>
                <h5 class="fw-bold">
                    La Roca johnson
                    <small class="text-muted">Posteado el dia 30/01/2022</small>
                </h5>
                <p>
                    Wow esta página es increíblemente increíble, menudo témalo tiene cuando le das al botón de dar
                    ritmo, 10/10 si fuera un trabajo de clase le pondría eso, estoy segurísimo de ello, le contrataré
                    para que me monte una.
                </p>
            </div>
            <!-- Media body -->
        </div>
    </div>
    <div>
        <div class="d-flex comentarios_texto">

            <img src="https://i.pinimg.com/236x/35/f6/71/35f6716adc65383508eca7cfda5b5594.jpg" alt="John Doe"
                 class="me-3 rounded-circle" style="width: 100px; height: 100px; border: black 1px solid;" />

            <div>
                <h5 class="fw-bold">
                    La Roca johnson
                    <small class="text-muted">Posteado el dia 30/01/2022</small>
                </h5>
                <p>
                    Wow esta página es increíblemente increíble, menudo témalo tiene cuando le das al botón de dar
                    ritmo, 10/10 si fuera un trabajo de clase le pondría eso, estoy segurísimo de ello, le contrataré
                    para que me monte una.
                </p>
            </div>
            <!-- Media body -->
        </div>
    </div>
    <div>
        <div class="d-flex comentarios_texto">

            <img src="https://i.pinimg.com/236x/35/f6/71/35f6716adc65383508eca7cfda5b5594.jpg" alt="John Doe"
                 class="me-3 rounded-circle" style="width: 100px; height: 100px; border: black 1px solid;" />

            <div>
                <h5 class="fw-bold">
                    La Roca johnson
                    <small class="text-muted">Posteado el dia 30/01/2022</small>
                </h5>
                <p>
                    Wow esta página es increíblemente increíble, menudo témalo tiene cuando le das al botón de dar
                    ritmo, 10/10 si fuera un trabajo de clase le pondría eso, estoy segurísimo de ello, le contrataré
                    para que me monte una.
                </p>
            </div>
            <!-- Media body -->
        </div>
    </div>
    <br>


    <script>
        function MouseWheelHandler(e, element) {
            var delta = 0;
            if (typeof e === 'number') {
                delta = e;
            } else {
                if (e.deltaX !== 0) {
                    delta = e.deltaX;
                } else {
                    delta = e.deltaY;
                }
                e.preventDefault();
            }
            element.scrollLeft -= (delta);
        }
        window.onload = function () {
            var carousel = {};
            carousel.e = document.getElementById('carousel');
            carousel.items = document.getElementById('carousel-items');
            carousel.leftScroll = document.getElementById('left-scroll-button');
            carousel.rightScroll = document.getElementById('right-scroll-button');
            carousel.items.addEventListener("mousewheel", handleMouse, false);
            carousel.items.addEventListener("scroll", scrollEvent);
            carousel.leftScroll.addEventListener("click", leftScrollClick);
            carousel.rightScroll.addEventListener("click", rightScrollClick);
            setLeftScrollOpacity();
            setRightScrollOpacity();
            function handleMouse(e) {
                MouseWheelHandler(e, carousel.items);
            }
            function leftScrollClick() {
                MouseWheelHandler(100, carousel.items);
            }
            function rightScrollClick() {
                MouseWheelHandler(-100, carousel.items);
            }
            function scrollEvent(e) {
                setLeftScrollOpacity();
                setRightScrollOpacity();
            }
            function setLeftScrollOpacity() {
                if (isScrolledAllLeft()) {
                    carousel.leftScroll.style.opacity = 0;
                } else {
                    carousel.leftScroll.style.opacity = 1;
                }
            }
            function isScrolledAllLeft() {
                if (carousel.items.scrollLeft === 0) {
                    return true;
                } else {
                    return false;
                }
            }
            function isScrolledAllRight() {
                if (carousel.items.scrollWidth && carousel.items.offsetWidth) {
                    if (carousel.items.scrollLeft + carousel.items.offsetWidth === carousel.items.scrollWidth) {
                        return true;

                    } else {
                        return true;
                    }
                    return false;
                }
                function setRightScrollOpacity() {
                    if (isScrolledAllRight()) {
                        carousel.rightScroll.style.opacity = 0;
                    } else {
                        carousel.rightScroll.style.opacity = 1;
                    }
                }
            }
        }
    </script>




</body>

</html>