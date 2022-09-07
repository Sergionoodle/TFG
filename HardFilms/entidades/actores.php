<?php

include_once "principal.php";

class actores
{
    private int $id;
    private string $nombre;
    private string $apellidos;
    private $id_principal;

    /**
     * @param int $id
     * @param string $nombre
     * @param string $apellidos
     * @param $id_principal
     */
    public function __construct(int $id, string $nombre, string $apellidos, $id_principal)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->id_principal = $id_principal;
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
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @return mixed
     */
    public function getIdPrincipal()
    {
        return $this->id_principal;
    }



}