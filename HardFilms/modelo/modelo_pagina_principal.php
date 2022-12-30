<?php

//Incluimos lo necesario (base de datos, clases de las entidades...)
include_once "../basedatos/database.php";
include_once "../entidades/principal.php";
include_once "../entidades/multimedia.php";
include_once "../entidades/genero.php";
include_once "../entidades/director.php";
include_once "../entidades/actores.php";

class modelo_pagina_principal
{

    //Hacemos la conexion con la base de datos
    private database $dbo;

    //Creamos una funcion para la conexion
    public function __construct()
    {
        $this->dbo = new database();
    }

    //Empezamos a crear las consultas

    public function listado_pelis(){
        $sql = "SELECT * FROM principal ORDER BY RAND();";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $return = array();

        while ($resultado = $query->fetch_assoc()){
            $return[] = new principal($resultado['id'],$resultado['titulo'],$resultado['descripcion'],$this->get_multimedia($resultado['id_multimedia']),$this->get_genero($resultado['id_genero']),$this->get_director($resultado['id_director']), $resultado['anyo'], $this->getActores($resultado['id']));
        }

        return $return;
    }

    public function listado_por_nombre(){
        $sql = "SELECT * FROM principal ORDER BY titulo;";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $return = array();
        while ($resultado = $query->fetch_assoc()){
            $return[] = new principal($resultado['id'],$resultado['titulo'],$resultado['descripcion'],$this->get_multimedia($resultado['id_multimedia']),$this->get_genero($resultado['id_genero']),$this->get_director($resultado['id_director']), $resultado['anyo'], $this->getActores($resultado['id']));
        }
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