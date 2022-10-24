<?php 

include_once "../entidades/principal.php";
include_once "../entidades/usuarios.php";

class puntuacion{

    private int $id;
    private usuarios $id_usuario;
    private principal $id_pelicula;
    private int $puntos;

    /**
     * @param int $id
     * @param usuarios $id_usuario
     * @param principal $id_pelicula
     * @param int $puntos
     */
    public function __construct(int $id, usuarios $id_usuario, principal $id_pelicula, int $puntos)
    {
        $this->id = $id;
        $this->id_usuario = $id_usuario;
        $this->id_pelicula = $id_pelicula;
        $this->puntos = $puntos;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return usuarios
     */
    public function getIdUsuario(): usuarios
    {
        return $this->id_usuario;
    }

    /**
     * @return principal
     */
    public function getIdPelicula(): principal
    {
        return $this->id_pelicula;
    }

    /**
     * @return int
     */
    public function getPuntos(): int
    {
        return $this->puntos;
    }




}

?>