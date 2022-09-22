<?php

include_once "usuarios.php";
include_once "principal.php";

class comentarios
{

    private int $id;
    private usuarios $id_usuario;
    private principal $id_pelicula;
    private string $comentario;

    /**
     * @param int $id
     * @param usuarios $id_usuario
     * @param principal $id_pelicula
     * @param string $comentario
     */
    public function __construct(int $id, usuarios $id_usuario, principal $id_pelicula, string $comentario)
    {
        $this->id = $id;
        $this->id_usuario = $id_usuario;
        $this->id_pelicula = $id_pelicula;
        $this->comentario = $comentario;
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
     * @return string
     */
    public function getComentario(): string
    {
        return $this->comentario;
    }



}