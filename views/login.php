<?php 
include '../include/cdn.boostrap.php';
?>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                
                <img src="images/white.png" alt="">
                <div class="text">
                    <p>Colegio Modesto Armijo</p>
                </div>
                
            </div>

            <form method="post" action="" class="col-md-6 right">
                
                <div class="input-box">
                   
                   <header>Iniciar Sesión</header>
                   <?php 
                        // include "./models/conexion.php";
                        // include "./controllers/login.controller.php";
                        ?>
                   <div class="input-field">
                        <input type="text" class="input" name="correo"  id="email" autocomplete="off">
                        <label for="email">Correo</label> 
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" id="pass" name="contrasena" >
                        <label for="pass">Contraseña</label>
                    </div> 
                    <a href="./dashboard.php" class="btn btn-primary btn-block">Enviar</a>
                </div>  
            </form>
        </div>
    </div>
</div>
