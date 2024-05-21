<?php


class Conexion{

    private $server;
    private $user;
    private $pwd;
    private $db;
    private $mysqli;

    function __construct()
    {
        $this->server = 'localhost';
        $this->user = 'root';
        $this->db = 'asistencias_prueba';
        $this->pwd = '';

    }
    

    public function conectar(){
        try {
            $this->mysqli = new mysqli($this->server, $this->user, $this->db, $this->pwd);

            if($this->mysqli->connect_errno){

                throw new Exception("No se conecto la base de datos ");
            }

            else{
                return $this->mysqli;
            }
        } catch (Exception $e) {
            echo "error". $e->getMessage();
            return 0;
        }
    }


    
    public function consultar($query){
        $resultado = mysqli_query($this->conectar(), $query);
        return $resultado;
    }
}



?>