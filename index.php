<?php 
include './template/header.php';
?>
<body>

<section class="">

<div class="login px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 ">
        <div class="col-lg-6 mb-2 mb-lg-0">
          <h2 class=" display-3 fw-bold ls-tight text-white ">
            Colegio <br />
            <span class="text-primary ">Modesto Armijo Lozano</span>
          </h2>
          <h4 class="text-white my-5">
          "¡Bienvenido al Colegio Modesto Armijo! Somos una institución comprometida con la excelencia académica".
          </h4>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <form>
                  
                  <!-- Email input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Coreo</label>
                  </div>

                  <!-- Password input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Contraseña</label>
                  </div>

                  <!-- Submit button -->
                  <a href="../views/dashboard.php" type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4" >
                    Acceder
                  </a>

                 
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

</section>
