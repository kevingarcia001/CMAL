<?php

class asignaturas{

    private $Nombre_Asignatura;


    public function __construct($Nombre_Asignatura) {
        $this->Nombre_Asignatura = $Nombre_Asignatura;
    }

    public function getAsignatura(){
        $this-> Nombre_Asignatura ;
    }
    public function setAsignatura($Nombre_Asignatura){
        $this-> Nombre_Asignatura;
    }

    // Método para obtener todas las asignaturas
    public static function obtenerTodasAsiganturas() {
       
    }

}
?>