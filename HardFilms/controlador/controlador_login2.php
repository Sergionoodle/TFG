<?php

include_once "../modelo/modelo_login.php";

$modelo = new modelo_login();

session_start();

$usuarios = $modelo->listado_usuarios();

if(isset($_POST['user']) && isset($_POST['password'])){

    foreach ($usuarios as $usuario) {

        if($_POST['user'] == $usuario->getUser()) {
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
            header("Location: ../controlador/controlador_extendido.php?id=" . $_GET['id']);
        }

    }

}

require_once "../vista/formulario_log.php";