<?php

session_start();
if(!empty($_POST['ingresar'])){

    if(!empty($_POST['correo']) and !empty($_POST['contrasena'])){

        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        echo $correo;
        echo $contrasena;
        // Consulta a la base de datos si estan los usuarios;
        $sql=$conexion->query("select * from usuarios where Correo='$correo' and Contraseña='$contrasena' ");
        if($datos=$sql->fetch_object()){

            $_SESSION["id_usuario"]=$datos->Id_Usuario;
            $_SESSION["Correo"]=$datos->Correo;
            header("location: inicio.php");
        }else{
            echo "<div class='alert añert-danger'> Acceso denegado </div>";
        }

    }else{
        echo "Campos vacios";
    }

}

?>