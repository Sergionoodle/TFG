<?php

include_once "../basedatos/database.php";
include_once "../entidades/comentarios.php";
include_once "../entidades/usuarios.php";
include_once "../entidades/principal.php";
include_once "../entidades/multimedia.php";
include_once "../entidades/genero.php";
include_once "../entidades/director.php";
include_once "../entidades/actores.php";

class modelo_imprimir_comentario
{

    private database $dbo;

    public function __construct()
    {
        $this->dbo = new database();
    }

   


    public function imprimir_comentarios($id_pelicula){

        $sql = "SELECT * FROM comentarios WHERE id_pelicula =".$id_pelicula.";";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $return = array();
        while ($resultado = $query->fetch_assoc()){
            $return[] = new comentarios($resultado['id'], $this->getUsuario($resultado['id_usuario']),$this->getPrincipal($resultado['id_pelicula']),$resultado['comentario']);
        }
        return $return;
    }

    public function getUsuario($id_usuario)
    {
        $sql = "SELECT * FROM usuarios WHERE id=".$id_usuario.";";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $return = array();
        while ($resultado = $query->fetch_assoc()) {
            $return = new usuarios($resultado['id'], $resultado['user'], $resultado['mail'], $resultado['password']);
        }
        return $return;

    }

    public function getPrincipal($id_pelicula)
    {
        $sql = "SELECT * FROM principal WHERE id=".$id_pelicula.";";
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