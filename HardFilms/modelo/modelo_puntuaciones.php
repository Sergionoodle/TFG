<?php

include_once "../basedatos/database.php";
include_once "../entidades/puntuacion.php";
include_once "../entidades/usuarios.php";
include_once "../entidades/principal.php";
include_once "../entidades/multimedia.php";
include_once "../entidades/genero.php";
include_once "../entidades/director.php";
include_once "../entidades/actores.php";

class modelo_puntuaciones
{
    private database $dbo;

    public function __construct()
    {
        $this->dbo = new database();
    }

    public function top_cinco_usuarios()
    {
        $sql = "SELECT id, id_usuario, id_pelicula, ROUND(AVG(puntos),0) as puntos FROM `puntuacion` GROUP BY puntos DESC LIMIT 5;";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $return = array();
        while ($resultado = $query->fetch_assoc()){
            $return[] = new puntuacion($resultado['id'], $this->getUser($resultado['id_usuario']), $this->getPeli($resultado['id_pelicula']), $resultado['puntos']);
        }
        return $return;
    }



    public function getUser($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id=".$id.";";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $resultado = $query->fetch_assoc();
        $return = new usuarios($resultado['id'], $resultado['user'],$resultado['mail'],$resultado['password']);
        return $return;

    }

    public function getPeli($id)
    {
        $sql = "SELECT * FROM principal WHERE id=".$id.";";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $resultado = $query->fetch_assoc();
        $return = new principal($resultado['id'],$resultado['titulo'],$resultado['descripcion'],$this->get_multimedia($resultado['id_multimedia']),$this->get_genero($resultado['id_genero']),$this->get_director($resultado['id_director']), $resultado['anyo'], $this->getActores($resultado['id']));
        return $return;

    }



    public function get_multimedia($id){
        $sql = "SELECT * FROM multimedia WHERE id=".$id.";";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $resultado = $query->fetch_assoc();
        $return = new multimedia($resultado['id'],$resultado['imagen'],$resultado['slider'],$resultado['trailer']);
        return $return;

    }

    public function get_director($id){
        $sql = "SELECT * FROM directores WHERE id=".$id.";";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $resultado = $query->fetch_assoc();
        $return = new director($resultado['id'],$resultado['nombre'],$resultado['apellidos']);
        return $return;

    }

    public function get_genero($id){
        $sql = "SELECT * FROM genero WHERE id=".$id.";";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $resultado = $query->fetch_assoc();
        $return = new genero($resultado['id'],$resultado['genero']);
        return $return;

    }

    private function getActores($id)
    {
        $sql = "SELECT * FROM actores WHERE id_principal=" . $id . ";";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $return = array();

        while ($resultado = $query->fetch_assoc()) {
            $return[] = new actores($resultado['id'], $resultado['nombre'], $resultado['apellidos'], $resultado['id_principal']);
        }
        return $return;

    }
}