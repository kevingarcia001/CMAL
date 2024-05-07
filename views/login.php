<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
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
                        include "./model/conexion.model.php";
                        include "./controller/login.controller.php";
                        ?>
                   <div class="input-field">
                        <input type="text" class="input" name="correo"  id="email" autocomplete="off">
                        <label for="email">Correo</label> 
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" id="pass" name="contrasena" >
                        <label for="pass">Contraseña</label>
                    </div> 
                   <div class="input-field">
                        
                        <input name="ingresar" type="submit" class="submit" value="Ingresar">
                   </div> 
                   <div class="signin">
                    <span><a href="#">
                      
                    </a></span>
                   </div>
                </div>  
            </form>
        </div>
    </div>
</div>
</body>
</html>