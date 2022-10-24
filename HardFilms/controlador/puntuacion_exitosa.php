<?php 

include_once "../modelo/modelo_puntuacion.php";

session_start();

$modelo = new modelo_puntuacion();

if(isset($_POST['puntosNota']) && isset($_GET['id']))
{

    header("Location: ../controlador/controlador_extendido.php?id=".$_GET['id']);

   $insert = $modelo->insertar_puntuacion($_SESSION['id_user'],$_GET['id'],$_POST['puntosNota']);


}

?>