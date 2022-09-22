<?php

include_once "../modelo/modelo_comentarios.php";

session_start();

$modelo = new modelo_comentarios();

if(isset($_POST['comentar_area']) && isset($_GET['id'])){


    header("Location: ../controlador/controlador_extendido.php?id=".$_GET['id']);

    $insert = $modelo->insertar_comentario($_SESSION['id_user'],$_GET['id'],$_POST['comentar_area']);

}