<?php

include_once "../basedatos/database.php";
include_once "../entidades/usuarios.php";

class modelo_login
{

    private database $dbo;

    public function __construct()
    {
        $this->dbo = new database();
    }

    public function usuario_log($user){
        $sql = "SELECT * FROM usuarios WHERE user='".$user."';";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $resultado = $query->fetch_assoc();
        $this->dbo->close();
        $return = new usuarios($resultado['id'],$resultado['user'],$resultado['mail'],$resultado['password']);
        return $return;
    }

    public function listado_usuarios(){
        $sql = "SELECT * FROM usuarios;";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $return = array();
        while ($resultado = $query->fetch_assoc()){
            $return[] = new usuarios($resultado['id'],$resultado['user'],$resultado['mail'],$resultado['password']);
        }
        return $return;
    }
}