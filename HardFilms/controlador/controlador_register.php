<?php

include_once "../modelo/modelo_register.php";

$modelo = new modelo_register();

if(isset($_POST['user']) && isset($_POST['email']) && isset($_POST['password'])){

    $user = $_POST['user'];
    $email = $_POST['email'];

    $passwd = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $modelo->insert_usuarios($user, $email, $passwd);
}


include_once "../vista/formulario_register.php";
