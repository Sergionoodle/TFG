<?php

include_once "../modelo/modelo_login.php";

$modelo = new modelo_login();

session_start();

if(isset($_POST['user']) && isset($_POST['password'])){

    $usuarios = $modelo->has_user($_POST['user']);

    if($usuarios) {

        $datos_user = $modelo->usuario_log($_POST['user']);

        $pass_verif = password_verify($_POST['password'], $datos_user->getPassword());

        if ($pass_verif == true) {
            $_SESSION['log'] = true;

            $_SESSION['id_user'] = $datos_user->getId();
            $_SESSION['user'] = $datos_user->getUser();
            $_SESSION['mail'] = $datos_user->getMail();

            header("Location: ../controlador/controlador_extendido.php?id=" . $_GET['id']);
        } else {
            echo "<script>alert('Error al iniciar sesion, la contraseña no es correcta')</script>";
        }
    }else{
        echo "<script>alert('Usuario no encontrado')</script>";
    }
}

require_once "../vista/formulario_log.php";