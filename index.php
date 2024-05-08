<?php
 include  "./template/header.php"
?>

<!-- hero -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>!Bienvenidos¡</h1>
      <h2>Centro Educativo Modesto Armijo Lozano.</h2>
      <a href="#about" class="btn-get-started scrollto">Inicia Sesión</a>
    </div>
  </section>


  <section id="noticias" class="py-5">
  <div class="container">
        <div class="section-title">
          <h2>Noticias</h2>
        </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4">
              <div class="card">
                <img src="./assets/img/mision/Recurso 1.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Título de la Noticia</h5>
                <p class="card-text">Resumen corto de la noticia. Puede ser un extracto del contenido principal.</p>
                <a href="#" class="btn btn-primary">Leer Más</a>
            </div>
            </div>

              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4">
              <div class="card">
                <img src="./assets/img/mision/Recurso 1.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Título de la Noticia</h5>
                <p class="card-text">Resumen corto de la noticia. Puede ser un extracto del contenido principal.</p>
                <a href="#" class="btn btn-primary">Leer Más</a>
            </div>
            </div>
              </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
              <div class="card mb-4">
              <div class="card">
                <img src="./assets/img/mision/Recurso 1.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Título de la Noticia</h5>
                <p class="card-text">Resumen corto de la noticia. Puede ser un extracto del contenido principal.</p>
                <a href="#" class="btn btn-primary">Leer Más</a>
            </div>
            </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4">
                <!-- Contenido de la cuarta noticia -->
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4">
                <!-- Contenido de la quinta noticia -->
              </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
              <div class="card mb-4">
                <!-- Contenido de la sexta noticia -->
              </div>
            </div>
          </div>
        </div>
        <!-- Agrega más carousel-items según sea necesario para más noticias -->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>


  <section id="about" class="about mt-5">
  <div class="section-title">
          <h2 class="text-white">Nosotros</h2>
        </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <!-- Carrusel aquí -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/img/historia/Recurso 3.png" class="d-block w-100" alt="First slide">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/historia/Recurso 4.png" class="d-block w-100" alt="Second slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-lg-1"></div> <!-- Columna vacía para crear el margen -->
      <div class="col-lg-5">
        <!-- Texto aquí -->
        <h3 class="texth mb-4">Historia</h3>
        <p class="textp mb-0">
          En el corazón de Managua, Nicaragua, un barrio vibrante y lleno de vida llamado Modesto Armijo Lozano estaba floreciendo con familias ansiosas por brindar a sus hijos la mejor educación posible. Sin embargo, la falta de acceso a una institución educativa cercana desafiaba sus sueños de un futuro brillante para sus hijos. Esta necesidad urgente dio origen a una historia de determinación y dedicación que culminaría en la fundación del prestigioso colegio que ahora conocemos como Modesto Armijo Lozano. La historia comenzó con un grupo de padres y educadores visionarios, que se unieron para abordar este vacío educativo en su comunidad. Con valentía y entusiasmo, se propusieron crear un espacio de aprendizaje que no solo ofreciera una educación de calidad, sino que también fomentara los valores de integridad, respeto y excelencia académica.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- Misión y Visión -->
<section id="features" class="features" data-aos="fade-up">
      <div class="container">

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
            <img src="./assets/img/mision/Recurso 1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
            <h2>Misión</h2>
            <p class="fst-italic">
            En el Colegio Modesto Armijo Lozano, nuestra misión es brindar una educación integral de excelencia que inspire y capacite a nuestros estudiantes para alcanzar su máximo potencial académico, personal y social. Nos comprometemos a crear un ambiente de aprendizaje inclusivo, seguro y estimulante donde cada estudiante sea valorado y respetado como individuo único.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> integridad.</li>
              <li><i class="bi bi-check"></i> responsabilidad.</li>
              <li><i class="bi bi-check"></i> respeto y excelencia.</li>
            </ul>
          </div>
        </div>
        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="./assets/img/mision/Recurso 2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h2>Visión</h2>
            <p class="fst-italic">
            En el Colegio Modesto Armijo Lozano aspiramos a ser reconocidos como un referente de excelencia educativa a nivel local, nacional e internacional. Nos visualizamos como una institución líder que se distingue por su compromiso con la innovación, la inclusión y el desarrollo integral de cada estudiante.
            </p>
            <ul>
              <li><i class="bi bi-check"></i>  Excelencia Educativa.</li>
              <li><i class="bi bi-check"></i>Innovación y Creatividad.</li>
              <li><i class="bi bi-check"></i> Formación Integral.</li>
            </ul>
          </div>
        </div>

      </div>
    </section>

<!-- Autoridades-->
<section id="team" class="team ">
      <div class="container">

        <div class="section-title">
          <h2 class="text-white">Autoridades</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="./assets/img/autoridades/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Josedeodo</h4>
                <span>main jungla</span>
              </div>
            </div>
          </div> 

        </div>

      </div>
    </section>

    <!--  contacto  -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contatanos</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
            
              <h3>Información</h3>
              <div>

                  <h3><i class="bi bi-telephone"></i>+505 5555-5555</h3>
        <p>Telefono.</p>
              </div>
    <h3><i class="bi bi-people"></i> Redes Sociales</h3>
              <h3>Redes Sociales</h3>
            </div>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="nombre" placeholder="Nombre y Apelldo" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="correo" id="email" placeholder="Correo Electronico" required>
              </div>
              <div class="form-group">
                <input type="num" class="form-control" name="telefono" id="subject" placeholder="Telefono" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>




<?php
 include  "./template/footer.php"
?>