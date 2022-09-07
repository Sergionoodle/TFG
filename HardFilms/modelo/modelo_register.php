<?php

include_once "../basedatos/database.php";
include_once "../entidades/usuarios.php";

class modelo_register
{

    private database $dbo;

    public function __construct()
    {

        $this->dbo = new database();
    }

    public function insert_usuarios($user, $email, $password){
        $sql = "INSERT INTO usuarios (user, mail, password) VALUES('".$user."','".$email."','".$password."');";
        $this->dbo->default();

        if(!$this->dbo->query($sql)){
            echo "<script>alert('ERROR, comprueba que los parametros estan bien o no estas registrado.')</script>";
        }else{
            header("Location: ../controlador/controlador_principal.php");
        }
        $this->dbo->close();
    }

}