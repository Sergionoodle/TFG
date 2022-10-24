<?php 

class puntos{

    private $id_pelicula;
    private $puntos;

    /**
    * @param int $is_pelicula
    * @param int $puntos
    */
    public function __construct(  $id_pelicula,  $puntos){


        $this->id_pelicula = $id_pelicula;
        $this->puntos = $puntos;

    }

   
    /**
     * @return int
     */
    public function getIdPelicula(): int
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