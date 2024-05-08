<?php
 include  "./template/header.php"
?>

<!-- hero -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>!Bienvenidos¡</h1>
      <h2>Centro Educativo Modesto Armijo Lozano.</h2>
      <a href="./views/dashboard.php" class="btn-get-started scrollto">Inicia Sesión</a>
    </div>
  </section>

  <section id="noticias" class="py-5">
  <div class="container">
    <div class="section-title">
      <h2>Noticias</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card mb-4">
          <img src="./assets/img/mision/celebracion2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">"Me gusta mi escuela, me quedo en ella"</h5>
            <p class="card-text">Estudiantes del Centro Escolar Modesto Armijo Lozano,participaron del Carnaval "Me gusta mi escuela, me quedo en ella".</p>
            <a href="#" class="btn btn-primary">Leer Más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card mb-4">
          <img src="./assets/img/mision/diadelpadre.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Día mundial del Docente</h5>
            <p class="card-text">Estudiantes de la Escuela Pública Primaria Modesto Armijo Lozano, celebraron el Día Mundial del Docente, cuando un 5 de octubre de 1994</p>
            <a href="#" class="btn btn-primary">Leer Más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-none d-lg-block">
        <div class="card mb-4">
          <img src="./assets/img/mision/donacion.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Centro educativo recibe donación de Unicef</h5>
            <p class="card-text">Centro Educativo Modesto Armijo Lozano, ubicado en el Distrito II de Managua, el Ministerio de Educación (MINED) </p>
            <a href="#" class="btn btn-primary">Leer Más</a>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</section>



<section id="about" class="about mt-5">
  <div class="container">
  <div class="section-title">
      <h2 class="text-white"> Nosostros</h2>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <!-- Carrusel aquí -->
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/img/historia/Recurso 3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/historia/Recurso 4.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
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
            <h2 class="mision">Misión</h2>
            <p class="parafo">
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
            <h2 class="vision" >Visión</h2>
            <p class="parafo">
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

    <section id="galeria" class="container">
      <div class="section-title">
        <h2>Galeria</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <img src="./assets/img/mision/Recurso 1.png" alt="">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <img src="./assets/img/mision/Recurso 1.png" alt="">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <img src="./assets/img/mision/Recurso 1.png" alt="">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <img src="./assets/img/mision/Recurso 1.png" alt="">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <img src="./assets/img/mision/Recurso 1.png" alt="">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <img src="./assets/img/mision/Recurso 1.png" alt="">
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
         <div class="member">
              <div class="member-img">
                <img src="./assets/img/autoridades/pexels-andrea-piacquadio-774909 1.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Prof. Ana López</h4>
                <span>profesora de literatura</span>
              </div>
            </div>
          </div> 
       <div class="member">
              <div class="member-img">
                <img src="./assets/img/autoridades/para_curriculum.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Prof. Miguel Martínez</h4>
                <span>profesor de matemáticas</span>
              </div>
            </div>
          </div> 
 <div class="member">
              <div class="member-img">
                <img src="./assets/img/autoridades/images (1).jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Prof. María Rodríguez</h4>
                <span>profesora de ciencias</span>
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
      <h2>Contáctanos</h2>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-about">
          <h3 class="info-titulo">Información</h3>
          <div class="contact-info">
            <i class="bi bi-telephone"></i>
            <div class="info-text">
              <h3>+505 5555-5555</h3>
              <p>Teléfono</p>
            </div>
          </div>
          <div class="contact-info">
            <i class="bi bi-geo-alt"></i>
            <div class="info-text">
              <h3>De donde fue la estación de la ruta 163</h3>
              <p>Dirección</p>
            </div>
          </div>
          <div class="contact-info">
          <i class="bi bi-envelope"></i>
            <div class="info-text">
              <h3>armijomodesto@gmail.com</h3>
              <p>Dirección</p>
            </div>
          </div>
         
          <h3 class="titulo-redes text-center">Redes Sociales</h3>
        </div>
        <div class="social-links">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>

      <div class="col-lg-5 col-md-12 my-4" data-aos="fade-up" data-aos-delay="300">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="nombre" placeholder="Nombre y Apellido" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="correo" id="email" placeholder="Correo Electrónico" required>
          </div>
          <div class="form-group">
            <input type="num" class="form-control" name="telefono" id="subject" placeholder="Teléfono" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">¡Tu mensaje ha sido enviado! ¡Gracias!</div>
          </div>
          <div class="text-left"><button type="submit">Enviar</button></div>
        </form>
      </div>

    </div>

  </div>
</section>





<?php
 include  "./template/footer.php"
?>
