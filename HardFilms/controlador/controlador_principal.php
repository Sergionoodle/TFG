<?php

include_once "../modelo/modelo_pagina_principal.php";
include_once "../modelo/modelo_puntuaciones.php";

$modelo = new modelo_pagina_principal();
$puntuaciones = new modelo_puntuaciones();
//TODO INICIAR SESION

//TOP 5

$lista = $modelo->listado_pelis();

$slider = $puntuaciones->top_cinco_usuarios();

session_start();

if(isset($_GET['ordenar'])){

    if($_GET['ordenar'] == "unsorted"){
        $lista = $modelo->listado_pelis();
    }elseif($_GET['ordenar'] == "nombre"){

        $lista = $modelo->listado_por_nombre();

    }
}

require_once "../vista/principal.php";

?>
