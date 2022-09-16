<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CONTACTO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/atlas/icono.png" rel="icon">
  <link href="assets/img/atlas/icono.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.8.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="contacto">ATLAS FC</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted scrollto" href="landingpage">Inicio</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <br><br>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-negro">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 id="titulo-rojo">CONTACTO</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3 class="centrar" id="titulo-blanco">CONTACTO ATLAS FC</h3>
              <p class="justificar">En Atlas FC estamos entusiasmados por saber tu opinión, 
                puedes contarnos a través de este formulario de contacto o por cualquiera de nuestras redes sociales aquí abajo, 
                ¡MIL VECES ARRIBA EL ATLAS!.</p>
              <div class="social-links centrar">
                <a href="https://twitter.com/AtlasFC" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/AtlasFC" target="_blank"class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/atlasfc/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>Avenida Pablo Neruda 3232A<br>Guadalajara, Jalisco. C.P. 44260</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>contacto@atlasfc.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>+52 33 3898 7244</p>
              </div>

            </div>
          </div>
          
          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <!-- role="form" class="php-email-form" -->
            <form action="/recibe-form-contacto" method="POST">
              <div class="php-email-form">
              @csrf

              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" id="nombre"  value={{ $nombre ?? old('nombre') }}>
                @error('nombre')
                  <i>{{ $message }}</i>
                @enderror
              </div>
              <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" class="form-control" name="correo" id="correo"  value={{ $correo ?? old('correo') }}>
                @error('correo')
                  <i>{{ $message }}</i>
                @enderror
              </div>
              <div class="form-group">
                <label for="comentario">Comentario:</label>
                <textarea class="form-control" name="comentario" rows="5" id="comentario">{{ $comentario ?? old('comentario') }}</textarea>
                @error('comentario')
                  <i>{{ $message }}</i>
                @enderror
              </div>
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">El formulario de contacto fue enviado con éxito. ¡Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>

              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>