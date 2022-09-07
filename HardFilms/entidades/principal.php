<?php

//Incluimos las clases que necesitemos
include_once "genero.php";
include_once "director.php";
include_once "multimedia.php";
include_once "actores.php";

class principal
{

    //Creamos las variables
    private int $id;
    private string $titulo;
    private string $descripcion;
    private int $puntuacion;
    private multimedia $id_multimedia;
    private genero $id_genero;
    private director $id_director;
    private int $anyo;
    private array $actores;

    /**
     * @param int $id
     * @param string $titulo
     * @param string $descripcion
     * @param int $puntuacion
     * @param multimedia $id_multimedia
     * @param genero $id_genero
     * @param director $id_director
     * @param int $anyo
     * @param array $actores
     */
    public function __construct(int $id, string $titulo, string $descripcion, int $puntuacion, multimedia $id_multimedia, genero $id_genero, director $id_director, int $anyo, array $actores)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->puntuacion = $puntuacion;
        $this->id_multimedia = $id_multimedia;
        $this->id_genero = $id_genero;
        $this->id_director = $id_director;
        $this->anyo = $anyo;
        $this->actores = $actores;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @return string
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * @return int
     */
    public function getPuntuacion(): int
    {
        return $this->puntuacion;
    }

    /**
     * @return multimedia
     */
    public function getIdMultimedia(): multimedia
    {
        return $this->id_multimedia;
    }

    /**
     * @return genero
     */
    public function getIdGenero(): genero
    {
        return $this->id_genero;
    }

    /**
     * @return director
     */
    public function getIdDirector(): director
    {
        return $this->id_director;
    }

    /**
     * @return int
     */
    public function getAnyo(): int
    {
        return $this->anyo;
    }

    /**
     * @return array
     */
    public function getActores(): array
    {
        return $this->actores;
    }



}