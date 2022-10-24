<?php

include_once "../entidades/puntuacion.php";
include_once "../basedatos/database.php";

class modelo_puntuacion{

    private database $dbo;

    public function __construct()
    {
        $this->dbo = new database();
    }

    public function insertar_puntuacion($id_usuario, $id_pelicula, $puntos)
    {
        $sql = "INSERT INTO puntuacion (id_usuario, id_pelicula, puntos) VALUES (".$id_usuario.",".$id_pelicula.",".$puntos.");";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $resultado = $query->fetch_assoc();
        $this->dbo->close();
        $return = new puntuacion($resultado['id'],$resultado['id_usuario'],$resultado['id_pelicula'],$resultado['puntos']);
        return $return;
    }


   
}

?>