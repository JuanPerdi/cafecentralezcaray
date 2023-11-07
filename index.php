<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Café Central - Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="imagenes/logoPeque.png">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js" ></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js" ></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  </script>
</head>

<body>

<!-- The Modal -->
<div class="modal mt-5" id="miModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><a href="centenario.php">121 aniversario del Café Central</a></h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body text-center">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="height: 40%;">
              <img class="img-fluid imagenSombra" src="imagenes/centenario/circo/cartelVertical.jpg" alt="">
            
          </div>
        </div>

      </div>
    </div>
  </div>


  <?php include "header.php" ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(imagenes/bar6.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">

                <img id='logoCentral' src='imagenes/logo2.png' width="70%">

                <h2 name="frases" class="animate__animated animate__fadeInDown">Desde <span>1902</span></h2>
              </div>
            </div>
          </div>


          <div class="carousel-item" style="background-image: url(imagenes/bar10.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 name="frases" class="animate__animated animate__fadeInDown"> En un entorno <span>Privilegiado</span>
                </h2>

              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(imagenes/belen.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 name="frases" class="animate__animated animate__fadeInDown"> Lleno de <span>Vida</span></h2>

              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(imagenes/exterior.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 name="frases" class="animate__animated animate__fadeInDown">Como en <span>Casa</span></h2>
              </div>
            </div>
          </div>



        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-lg-6">
          <img src="imagenes/bar5.jpg" class="img-fluid imagenSombra" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content">
          <p>
            En uno de los enclaves más atractivos de la Villa de Ezcaray se encuentra este establecimiento, dando
            servicio desde <strong>1902</strong>. Lugar para disfrutar tanto de la compaña como de sus encurtidos,
            vinos, vermús, cafés y copas.
          </p>
          <p>
            Un local acogedor, que cuenta con una agradable terraza interior.
          </p>
          <p>
            Un pequeño rincón para la <strong>cultura y el arte</strong>. Donde visitar la exposición permanente de
            acuarelas elaboradas por Juan Luis Pérez, regente del local. Y en fechas navideñas, su
            <strong>Belén</strong> peculiar que se instala en el interior del local.
          </p>
          <p>
            También nos ofrece la posibilidad de coger un libro de su biblioteca, eso sí, con vuelta.
            Apasionados de la <strong>fotografía y la montaña</strong>, que no escatiman un momento para informar y
            enseñar a los clientes montañeros, rutas y enclaves de nuestro valle.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">
        <h3 class="animate__animated animate__fadeInDown"><span style="color:#fa1484">Enlaces</span> de interés</h3>
        <br>
        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="bi bi-pencil"></i>
              <h3><a href="acuarelas.php">Acuarelas</h3>
              <p>Paisajes, bodegones, obras de acuarela sobre papel que se exponen en el Café Central. Realizadas por
                Juan Luis</p>
              </a>
            </div></a>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-camera"></i>
              <h3><a href="fotografia.php">Fotografía</a></h3>
              <p>Fotografías de de diferentes eventos realizadas por Juan Luis</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-snow"></i>
              <h3><a href="belen.php">Belén navideño</h3>
              <p>Peculiar Belén ambientado en la zona de Ezcaray de principios del s.XX. Y que cada año
                incorpora un toque de actualidad, local o nacional... Siendo toda la creación obra de Juan Luis</p>
            </div></a>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->




  </main><!-- End #main -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.Beléncom/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <?php include "footer.php" ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

 
</body>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // Obtener todos los elementos con el atributo "name" igual a "mi-nombre"
    var elementos = document.getElementsByName("deshabilitado");

    // Iterar sobre cada elemento y cambiar su color de fondo
    for (var i = 0; i < elementos.length; i++) {
      elementos[i].style.backgroundColor = "#E8E8E8"; // Cambiar el color de fondo a rojo
    }
  </script>
  <script>
    if (screen.width < 767 && screen.height < 924) {
      var logo = document.getElementById("logoCentral");
      logo.src = 'imagenes/logo.png';
      logo.style.width = '70%';

      var frases = document.getElementsByName('frases');
      frases.forEach(function (frase) {
        frase.style.fontSize = "35px";
      });

    }
  </script>

<script>
$(document).ready(function() {
  $('#miModal').modal('show');
});
</script>

</html>