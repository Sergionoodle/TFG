<?php 
include_once "../entidades/puntos.php";
include_once "../basedatos/database.php";

class modelo_imprimir_puntuacion{

    private database $dbo;

    public function __construct()
    {
        $this->dbo = new database();
    }

    public function imprimir_puntos($id)
    {
        
        $sql = "SELECT IFNULL(id_pelicula, 0) as id_pelicula, IFNULL(avg(puntos), 0) as puntos FROM puntuacion WHERE id_pelicula=".$id.";";
        $this->dbo->default();
        $query = $this->dbo->query($sql);
        $this->dbo->close();
        $return = array();
        while($resultado = $query->fetch_assoc()){
            $return[] = new puntos($resultado['id_pelicula'],$resultado['puntos']);
        }
        return $return;
        
    }

}

?>