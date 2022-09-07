<?php

include_once "../modelo/modelo_pagina_principal.php";

$modelo = new modelo_pagina_principal();

//TODO INICIAR SESION

//TOP 5
$peliculas = $modelo->top_5();

$lista = $modelo->listado_pelis();

session_start();

if(isset($_GET['ordenar'])){

    if($_GET['ordenar'] == "unsorted"){
        $lista = $modelo->listado_pelis();
    }elseif($_GET['ordenar'] == "nombre"){

        $lista = $modelo->listado_por_nombre();

    }elseif($_GET['ordenar'] == "mejor"){

        $lista = $modelo->listado_por_puntos();

    }
}

require_once "../vista/principal.php";

?>
