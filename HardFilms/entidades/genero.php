<?php

class genero
{

    private int $id;
    private string $genero;

    //GENERAMOS CONSTRUCTORES
    /**
     * @param int $id
     * @param string $genero
     */
    public function __construct(int $id, string $genero)
    {
        $this->id = $id;
        $this->genero = $genero;
    }

    //GENERAMOS GETTERS
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
    public function getGenero(): string
    {
        return $this->genero;
    }



}