<?php

include_once "../basedatos/database.php";
include_once "../entidades/comentarios.php";

class modelo_comentarios
{
    private database $dbo;

    public function __construct()
    {
        $this->dbo = new database();
    }

    public function insertar_comentario($id_usuario, $id_pelicula, $comentario){
        $sql = "INSERT INTO comentarios (id_usuario, id_pelicula, comentario) VALUES (".$id_usuario.",".$id_pelicula.",'".$comentario."');";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $resultado = $query->fetch_assoc();
        $this->dbo->close();
        $return = new comentarios($resultado['id'],$resultado['id_usuario'],$resultado['id_pelicula'],$resultado['comentario']);
        return $return;
    }

}