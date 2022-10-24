<?php

include_once  "../modelo/modelo_pagina_extendida.php";
include_once "../modelo/modelo_imprimir_comentario.php";
include_once "../modelo/modelo_imprimir_puntuacion.php";

$modelo = new modelo_pagina_extendida();

$comentario = new modelo_imprimir_comentario();

$puntuaciones = new modelo_imprimir_puntuacion();

session_start();

if(isset($_GET['id'])){
    $datos = $modelo->getExtendida($_GET['id']);
    $slider = $modelo->slider();
    $coment = $comentario->imprimir_comentarios($_GET['id']);
    $puntos = $puntuaciones->imprimir_puntos($_GET['id']);
}else{
    echo "<script>alert('ID no seleccionado')</script>";
}



require_once "../vista/extendida.php";