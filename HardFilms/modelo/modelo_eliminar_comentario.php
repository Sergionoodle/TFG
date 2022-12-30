<?php

include_once "../basedatos/database.php";
include_once "../entidades/comentarios.php";

class modelo_eliminar_comentario
{
    private database $dbo;

    public function __construct()
    {
        $this->dbo = new database();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM comentarios WHERE id=".$id;
        $this->dbo->default();
        $this->dbo->query($sql);
        $this->dbo->close();

    }

}