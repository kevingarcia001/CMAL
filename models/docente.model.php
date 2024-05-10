<?php

class docentes {

    private $Primer_Nombre, $Segundo_Nombre, $Primer_Apellido, $Segundo_Apellido, $Edad, $Fecha_Nacimiento, $Correo, $Contacto, $Cedula;


    public function __construct($Primer_Nombre, $Segundo_Nombre, $Primer_Apellido, $Segundo_Apellido, $Edad, $Fecha_Nacimiento, $Correo, $Contacto, $Cedula) {
        $this->Primer_Nombre = $Primer_Nombre;
        $this->Segundo_Nombre = $Segundo_Nombre;
        $this->Primer_Apellido = $Primer_Apellido;
        $this->Segundo_Apellido = $Segundo_Apellido;
        $this->Edad = $Edad;
        $this->Fecha_Nacimiento = $Fecha_Nacimiento;
        $this->Correo = $Correo;
        $this->Contacto = $Contacto;
        $this->Cedula = $Cedula;
    }

    // Métodos getter
    public function getPrimerNombre() {
        return $this->Primer_Nombre;
    }

    public function getSegundoNombre() {
        return $this->Segundo_Nombre;
    }

    public function getPrimerApellido() {
        return $this->Primer_Apellido;
    }

    public function getSegundoApellido() {
        return $this->Segundo_Apellido;
    }

    public function getEdad() {
        return $this->Edad;
    }

    public function getFechaNacimiento() {
        return $this->Fecha_Nacimiento;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function getContacto() {
        return $this->Contacto;
    }

    public function getCedula() {
        return $this->Cedula;
    }

    // Métodos setter
    public function setPrimerNombre($Primer_Nombre) {
        $this->Primer_Nombre = $Primer_Nombre;
    }

    public function setSegundoNombre($Segundo_Nombre) {
        $this->Segundo_Nombre = $Segundo_Nombre;
    }

    public function setPrimerApellido($Primer_Apellido) {
        $this->Primer_Apellido = $Primer_Apellido;
    }

    public function setSegundoApellido($Segundo_Apellido) {
        $this->Segundo_Apellido = $Segundo_Apellido;
    }

    public function setEdad($Edad) {
        $this->Edad = $Edad;
    }

    public function setFechaNacimiento($Fecha_Nacimiento) {
        $this->Fecha_Nacimiento = $Fecha_Nacimiento;
    }

    public function setCorreo($Correo) {
        $this->Correo = $Correo;
    }

    public function setContacto($Contacto) {
        $this->Contacto = $Contacto;
    }

    public function setCedula($Cedula) {
        $this->Cedula = $Cedula;
    }


   
}


?>