<?php

include_once  "../modelo/modelo_pagina_extendida.php";

$modelo = new modelo_pagina_extendida();

session_start();

if(isset($_GET['id'])){
    $datos = $modelo->getExtendida($_GET['id']);
    $slider = $modelo->slider();
}else{
    echo "<script>alert('ID no seleccionado')</script>";
}


require_once "../vista/extendida.php";