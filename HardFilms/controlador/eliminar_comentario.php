<?php

include_once "../modelo/modelo_eliminar_comentario.php";

session_start();

$eliminar = new modelo_eliminar_comentario();

if(isset($_GET['id']) && isset($_GET['id_peli'])){

    $eliminar->delete($_GET['id']);

    header("Location: ../controlador/controlador_extendido.php?id=".$_GET['id_peli']);
}

?>
