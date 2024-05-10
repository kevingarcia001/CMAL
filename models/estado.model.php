<?php

class estado_asistencia {

    private $Estado;


    public function __construct($Estado) {
        $this->$Estado = $Estado;
    }

    public function getEstado(){
        $this-> Estado;
    }
    public function setEstado($Estado){
        $this-> Estado ;
    }

}
?>