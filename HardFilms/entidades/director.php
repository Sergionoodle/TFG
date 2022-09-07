<?php
class director
{

    private int $id;
    private string $nombre;
    private string $apellidos;

    //GENERAMOS CONSTRUCTOR

    /**
     * @param int $id
     * @param string $nombre
     * @param string $apellidos
     */
    public function __construct(int $id, string $nombre, string $apellidos)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
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



}