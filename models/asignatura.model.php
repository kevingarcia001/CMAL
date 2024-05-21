<?php


include_once "../models/db.model.php";

class Asignaturas{

    private $conexion;


    public function __construct() {
        $this->conexion =  new conexion();
    }

    public function read(){
        $consulta = "select * from Asignaturas;";
        return $this-> conexion->consultar($consulta);
    }
    // public function setAsignatura($Nombre_Asignatura){
    //     $this-> Nombre_Asignatura;
    // }



}
?>