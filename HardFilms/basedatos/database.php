<?php
//.Extendemos la clase de mysqli
class database extends mysqli
{


    //Creamos las variables donde crearemos los credenciales para la base de datos
    private string $hostname = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $database = "hardfilms";
    //Funcion que llama a la conexion
    public function default(){
        $this->local();
    }

    //Funcion de la conexion
    public function local(){

        //Creamos el connect y le introducimos los credenciales
        parent::connect($this->hostname, $this->username, $this->password, $this->database);


        //Si da error la conexion nos avisa
        if(mysqli_connect_error()){
            die("No se ha podido conectar a la base de datos ERROR:".mysqli_connect_error());
        }

    }

}
?>