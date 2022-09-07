<?php
class multimedia{

    private string $id;
    private string $imagen;
    private string $slider;
    private string $trailer;
    //GENERAMOS CONSTRUCTOR
    /**
     * @param string $id
     * @param string $imagen
     * @param string $slider
     * @param string $trailer
     */
    public function __construct(string $id, string $imagen, string $slider, string $trailer)
    {
        $this->id = $id;
        $this->imagen = $imagen;
        $this->slider = $slider;
        $this->trailer = $trailer;
    }

    //GENERAMOS GETTERS
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getImagen(): string
    {
        return $this->imagen;
    }

    /**
     * @return string
     */
    public function getSlider(): string
    {
        return $this->slider;
    }

    /**
     * @return string
     */
    public function getTrailer(): string
    {
        return $this->trailer;
    }



}