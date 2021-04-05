<!--cabecera-->

  <header class="text-light text-center" style="width: 100%;" >
    
    <div class= "caja">
      <img src="<?php echo __PATH__ ?>/themes/jupiter/img/2.JPG" style="width: 100%; height: 600px; opacity: 0.5;">
      <div class="texto">
        <div>
          <h2 class="">ÚNETE A NOSOTROS</h2>

          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo __PATH__ ?>/themes/jupiter/img/iconos/1.png" alt="Categiría Finanzas" width="50px" height="50px">
                <p class="">Cuentas / Finanzas</p>
              </div>
              <div class="carousel-item">
                <img src="<?php echo __PATH__ ?>/themes/jupiter/img/iconos/2.png" alt="Categoría Educación" width="50px" height="50px">
                <p class="">Educación / Información</p>
              </div>
              <div class="carousel-item">
                <img src="<?php echo __PATH__ ?>/themes/jupiter/img/iconos/3.png" alt="Categoría RRHH" width="50px" height="50px">
                <p class="">RRHH / Desarrollo</p>
              </div>
              <div class="carousel-item">
                <img src="<?php echo __PATH__ ?>/themes/jupiter/img/iconos/4.png" alt="Categoría Tecnología" width="50px" height="50px">
                <p class="">Tecnología</p>
              </div>

            </div>
          </div>
          <h6>Busca en nuestras vacantes y encuentra la que mejor se ajuste a ti</h6>
        </div>
        <a href="#grid">
          <ion-icon name="chevron-down-outline"></ion-icon>
        </a>
      </div>
    </div>
  </header>

  <!--Grid de imagenes-->

  <section id="grid" class="container-fluid grid-i"> 
    <div class="container text-center">
      <h3>Sé parte de la familia</h3>
      <p>Si quieres crecer con nosotros, ven y acompañanos a construir un mejor futuro</p>

      <div class="g-imagen">
        <div class="rowe">
          <div class="columna">
            <img class="imag" src="<?php echo __PATH__ ?>/themes/jupiter/img/1.jpeg">
            <div>
              <div class="oscurecer"></div>
              <div class="texto text-center text-white w-75">
                <h4 class="mb-3 text-white" style="font-size:  28px;">REGÍSTRATE Y DÉJANOS CONOCERTE</h4>
                <div>
                  <button type="button"onclick="location.href='<?php echo __PATH__.'/crear-cuenta'?>'" class="btn btn-outline-light btn-lg rounded mt-lg-4 mt-sm-3">Únete</button>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <img src="<?php echo __PATH__?>/themes/jupiter/img/2.jpeg" height="60%" width="30% ">
            <img src="<?php echo __PATH__ ?>/themes/jupiter/img/1.JPG">
          </div>
          <div class="column">
            <img src="<?php echo __PATH__ ?>/themes/jupiter/img/3.JPG"> 
            <img src="<?php echo __PATH__ ?>/themes/jupiter/img/3.jpeg" height="60%">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--Encuentra tu trabajo seccion-->
  <section class="container-fluid pb-5 pt-5 et">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>Encuentra  el trabajo perfecto para ti</h2>
          <p>Busca entre las vacantes disponibles.<br>Tu puesto ideal esta aquÍ.</p>
          <button type="button" onclick="location.href='<?php echo __PATH__.'/ofertas'?>'" class="btn btn-outline-dark btn-lg rounded">Buscar Ofertas</button>
        </div>

        <div class="col-lg-4">
          <img class="w-100 rounded" src="<?php echo __PATH__ ?>/themes/jupiter/img/1.jpeg">
        </div>

      </div>
    </div>
  </section>

  <!-- Icons Grid -->
  <section class="container-fluid informacion">
    <div class="container text-center info">
      <h2>Conoce Jobtify</h2>
      <hr class="w-25">
      <div class="card-info">
        <p>Únete a nuestro equipo y ayúdanos a consolidar esta nueva manera de trabajar que ya es tendencia en el mundo. Estarás contribuyendo a que empresas, organizaciones e individuos puedan contratar y administrar los mejores talentos de América Latina online para realizar sus proyectos de manera remota. Obteniendo excelentes resultados de un modo rápido, simple y seguro.</p>

        <p>Al tiempo que estarás brindando la posibilidad de acceder a una mejor calidad de vida a muchos profesionales independientes, permitiéndoles trabajar en proyectos acordes a sus preferencias, habilidades y rango de precio deseado, sin importar el lugar en el que se encuentren.</p>
      </div>
      
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase container-fluid imagenes">
    <div class="container p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img sc-img" style="background-image: url('<?php echo __PATH__ ?>/themes/jupiter/img/4.jpg'); "></div>
        <div class="col-lg-6 order-lg-1 my-auto sc-text">
          <h2>Excelente ambiente laboral</h2>
          <p class="lead mb-0">Contamos con instalaciones modernas, espacios recreativos y una diversidad de programas para garantizar la productivadad a nuestros colaboradores.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img sc-img" style="background-image: url('<?php echo __PATH__ ?>/themes/jupiter/img/1.jfif');"></div>
        <div class="col-lg-6 my-auto sc-text">
          <h2>Capacitación continua</h2>
          <p class="lead mb-0">Estámos comprometidos con nuestros clientes, y para ellos nos esforzamos para que nuestro equipo esté altamente capacitado en su respectiva área, es por ello, que contamos con programas de capacitaciones y certificaciones para nuestros colaboradores.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img sc-img" style="background-image: url('<?php echo __PATH__ ?>/themes/jupiter/img/2.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto sc-text">
          <h2>Great work to place 2019-2020</h2>
          <p class="lead mb-0">Tenemos uno de los reconocimientos más importantes a nivel internacional. Jobtify es una empresa reconocida como uno de los mejores luagres para laborar en América Latina.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Nuestros Reclutadores</h2>
      <div class="row">

        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?php echo __PATH__ ?>/themes/jupiter/img/reclutadores/1.png" alt="">
            <h5>Fred Santana <i class="fab fa-linkedin text-primary fa-1x fa-fw"></i></h5>
            <h6>Reclutador TI</h6>
            <p class="font-weight-light mb-0">"Si trabajas duro, las cosas negativas serán extraordinarias."</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?php echo __PATH__ ?>/themes/jupiter/img/reclutadores/2.png" alt="">
            <h5>Margaret Vargas <i class="fab fa-linkedin text-primary fa-1x fa-fw"></i></h5>
            <h6>Reclutador TI</h6>
            <p class="font-weight-light mb-0">"Ayudarte en el proceso de busqueda de trabajo es un gran placer."</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?php echo __PATH__ ?>/themes/jupiter/img/reclutadores/3.jpg" alt="">
            <h5>Nick Martinez <i class="fab fa-linkedin text-primary fa-1x fa-fw"></i></h5>
            <h6>Reclutador TI</h6>
            <p class="font-weight-light mb-0">"Es un verdadero placer formar parte de la familia Jobtify."</p>
          </div>
        </div>
      </div>
    </div>
  </section>

