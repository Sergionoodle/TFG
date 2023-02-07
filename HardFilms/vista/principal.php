<!DOCTYPE html>
<html lang="es">
<?php     
    error_reporting(0);
?>

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


    <style>
        .btn-color,
        .btn-log,
        .btn-orden,
        .btn-regist,
        .btn-orden,
        .btn-buscar {
            border: 1px solid rgba(0, 0, 0, 0.486);
            background-color: rgba(255, 255, 255, 0.562);
            border-radius: 5px;
        }

        .div_img {
            margin: 5px;
            height: 300px;
            width: auto;
        }

        .estrella{
            width: 25px;
            height: 25px;
        }

        .div_bienvenida {
            margin: 20px;
        }

        .div_contenido {
            margin: 5px;
        }

        .hr_pelis {
            width: 150px;
            background-color: rgb(0, 0, 0);
        }

        .card-img-top {
            max-width: 100%;
            max-height: 100%;

        }

        .formulario-busqueda {
            float: left;
            margin-left: 20px;
            margin-right: 50px;
        }

        .btn-color {
            margin-top: 8px;

        }

        .carousel {
            height: 600px;
            background-color: rgba(70, 76, 77, 0.445);
            margin: 20px;
            border: 1px solid rgba(0, 0, 0, 0.158);
        }

        .img_carusel {
            width: 100%;
            height: 599px;
            display: block;

        }

        .card:hover .card{
            -webkit-transform:scale(1.3);transform:scale(1.3);

        }

        .a_estilo:link, .a_estilo:visited, .a_estilo:active{
            text-decoration: none;
            color: black;
        }

        .user_p{
            font-weight: bold;
            font-size: x-large;
        }
        .card:hover{
            overflow:hidden;

        }


        .card:hover{
            filter: opacity(.5);
        }

        .h1_top5 {
            margin: 5px;
            text-align: center;
            text-shadow: -3px 2px 0 #5b636662;
            font-weight: bold;
            color: black;

        }

        .filtro{
            display: none;
        }
        #logo {
            margin-left: 5px;
        }

        .div_formularios {
            margin-top: 50px;
        }

        .card {
            margin-left: 10px;
            margin-top: 10px;
            background-color: #33333328;
        }

        .card-deck {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;


        }

        .module {
            overflow: hidden;
            margin: 0 0 0 0;
            padding-bottom: 5px;

        }


        .line-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .navbar{
            background-color: #333333;
        }

        .top_titulo, .p_top{
            text-align: center;
            color: #ffffff;
            font-family: impact;
            font-size: 46px;
            text-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;
            -webkit-text-fill-color: #ffffff;
            -webkit-text-stroke: 2px black;
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
                $(".h1_top5").css("color", "white")
                $(".div_bienvenida").css("color", "white")
                $(".logo").replaceWith('<img class="logo" src="../img/hardfilmsred.png" width="100px">')
                $(".card").css("background-color", "rgba(255, 255, 255, 0.452)")
                $(".carousel").css("background-color", "rgba(255, 255, 255, 0.452)")
                $(".a_estilo").css("color","white")

//Cuando esta cambiado le pone el color de nuevo si pulsas el Light mode
            } else {
                $(this).text("Modo Oscuro")
                $("body").css("background-color", "white")
                $(".navbar").css("background-color", "#333333")
                $(".h1_top5").css("color", "black")
                $(".div_bienvenida").css("color", "black")
                $(".logo").replaceWith('<img class="logo" src="../img/hardfilms white.png" width="100px">')
                $(".card").css("background-color", "#33333328")
                $(".carousel").css("background-color", " rgba(70, 76, 77, 0.445)")
                $(".a_estilo").css("color","black")


            }
        });
    })
</script>
<body>

<!--NAVAR-->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <!--Te lleva a un videojuego como easter egg-->
    <a class="navbar-brand" id="logo" href="#"><img class="logo" src="../img/hardfilms white.png" width="100px"></a>

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
                <a class="nav-link" href="../controlador/cerrar_sesion.php"><button class="btn-log">Cerrar Sesion</button></a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>
<h1 class="h1_top5">TOP 5 MEJORES PELICULAS DEL MOMENTO</h1>
<!--SLIDER-->
<div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="../img/cine.jpg" class="img_carusel" alt="a">
            <div class="carousel-caption d-none d-md-block">
            <p class="p_top">HardFilms tu pagina de confianza, registrate QUE ES GRATIS!!</p>
            </div>
        </div>
        <?php
        for($i = 0; $i < count($slider); $i++){

        ?>
        <!--IMG A DUPLICAR-->
        <div class="carousel-item">
            <center>
                <img class="img_carusel" src="../<?php echo $slider[$i]->getIdPelicula()->getIdMultimedia()->getSlider(); ?>"
                      alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="top_titulo"><?php echo 'TOP '.($i+1)." - ".$slider[$i]->getIdPelicula()->getTitulo();?></h3>
                </div>
            </center>
        </div>
       <?php
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="div_bienvenida">
    <p>¡ Bienvenido a esta maravillosa página donde podrás dar a conocer tu opinión de todas las películas que se
        van añadiendo, para ello regístrate en el botón de ahí arriba y disfruta de comentar y puntuar!! HardFilms
        es una página de reviews donde podrás dar tu opinión, ver la opinión del resto y puntuar!!</p>
    <p>
    <p>
        ENTRA EN LA FICHA PARA VER QUE PUNTUACION LE HAN DADO LOS USUARIOS!!
    </p>
        <!-- Bienvenida usuario en <b>-->
        <?php        
        if($_SESSION['log'] == true){
            echo "<span class='user_p'>Bienvenido/a ".$_SESSION['user'].".</span> Logeado con el correo ".$_SESSION['mail'];
        } ?>
    </p>
</div>
<!--FORMULARIOS-->
<div class="div_formularios">

    <!--Formulario para buscar una peli-->
    <form class="formulario-busqueda">

        <input class="inputBusqueda" id="buscar" name="buscar" type="text" placeholder="Busca" aria-label="Search">

        <button class="btn-buscar" type="submit">Buscar</button>

    </form>

    <!--Formulario para ordenar la peli-->
    <form class="form-orden" action="../controlador/controlador_principal.php">
        <select name="ordenar" id="ordenador">
            <option value="unsorted">Por defecto</option>
            <option value="nombre">Por Titulo</option>
        </select>
        <button class="btn-orden" type="submit">Ordenar</button>
    </form>
</div>

<br>
<br>

<!--Script para aos-->
<script>
    AOS.init({
        once: true
    });


</script>

<!--Carta de la pelicula-->
<div class="card-deck col-md-12" id="result">
    <?php

    foreach ($lista as $elemento) {

    ?>
    <div data-aos="zoom-out-up" id="carta" class="card col-md-2">
        <a class="a_estilo" href="../controlador/controlador_extendido.php?id=<?php echo $elemento->getId(); ?>">

        <div class="div_img">
            <img class="card-img-top" src="../<?php echo $elemento->getIdMultimedia()->getImagen() ?>" alt="Card image cap">
        </div>
        <div class="div_contenido">
            <b>Titulo: </b><p class="titulo"><?php echo $elemento->getTitulo() ?></p>
            <center>
                <hr class="hr_pelis">
            </center>
            <p><b>Sinopsis:</b></p>
            <div class="card-body module line-clamp">
                <p><?php echo $elemento->getDescripcion(); ?></p>
            </div>
        </div>
        </a>
    </div>

    <?php } ?>

</div>

<script>
document.addEventListener('keyup',e=>{

    if(e.target.matches('#buscar')){

       var cartas = $('.card')

       for(let i = 0; i < cartas.length; i++){

           //console.log(cartas[i].children[1].children[1].innerHTML)

           console.log(cartas[i].children[0].children[1].children[1].innerHTML)
           let comparacion = cartas[i].children[0].children[1].children[1].innerHTML.toLowerCase()

           if(!comparacion.includes(e.target.value.toLowerCase())){
               cartas[i].classList.add('filtro')
           }else{
               cartas[i].classList.remove('filtro')
           }

       }

    }
})
</script>


</body>

</html>