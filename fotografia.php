<?php ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <title>Café Central - Fotofrafía</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="imagenes/logo.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v4.9.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="scripts.js"></script>
  <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.js"></script>
  <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />


</head>

<body>

  <?php include "header.php" ?>

  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="arte.php">Arte</a></li>
        <li>Fotografía</li>
      </ol>
      <h2>Fotografía</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="services" class="services"><!-- End Breadcrumbs -->
    <div class="container">
      <!--Arnedillo Trail-->
      <div class="row">
        <div class="content">
          <h3 style="color:#fa1484">Arnedillo Trail 2023</h3>
          <p class="fst-italic">
            Penúltima prueba del circuito de La Rioja Mountain Races, con una carrera de 26 kilómetros
            y otra de 15 kilómetros. Día muy caluroso y conociendo nuevas montañas de La Rioja.
          </p>
        </div>
      </div>
      <div class="row">
        <?php for ($i = 1; $i < 4; $i++) { ?>
          <div class="col-lg-3 col-md-6 align-items-stretch mb-4 ">
            <a href="imagenes/arnedillo/arnedillo<?= $i ?>.jpg" class="fancybox">
              <img class="img-fluid imagenSombra" src="imagenes/arnedillo/arnedillo<?= $i ?>.jpg" alt="">
            </a>
          </div>
        <?php } ?>
        <div class="d-flex col-lg-3 col-md-6  mb-4 justify-content-center align-items-center">
          <a
            href="https://drive.google.com/drive/folders/1mZZS71iuaN9gwvtRRZeXdaV2KWtCiCfv">
            <p style="font-size: 30px; color:#fa1484;font-style:italic">Ver más</p>
          </a>
        </div>
      </div>
      <!--Gorbea-->
      <div class="row">
        <div class="content">
          <h3 style="color:#fa1484">Gorbea Suzien 2023</h3>
          <p class="fst-italic">
            Extraordinaria carrera que se realiza en el pequeño pueblo de Zeanuri (Vizcaya).
            Puntuable en la copa del mundo de Skyrunning, con élite mundial como por ejemplo
            Manuel Merillas, Antonio Martínez y Frédéric Tranchand. Y por supuesto nuestro vecino
            Alain Santamaría, vencedor de la prueba de una manera espectacular y situándose entre
            los mejores del mundo.
          </p>
        </div>
      </div>
      <div class="row">
        <?php for ($i = 1; $i < 8; $i++) { ?>
          <div class="col-lg-3 col-md-6 align-items-stretch mb-4 ">
            <a href="imagenes/gorbea/gorbea<?= $i ?>.jpg" class="fancybox">
              <img class="img-fluid imagenSombra" src="imagenes/gorbea/gorbea<?= $i ?>.jpg" alt="">
            </a>
          </div>
        <?php } ?>
        <div class="d-flex col-lg-3 col-md-6  mb-4 justify-content-center align-items-center">
          <a
            href="https://photos.google.com/share/AF1QipMPKu9SL3v778gz3ZeBxZZRKaDizj8ggqmQCAFKH61qm549eB3m6D-BTBwHA5GQMg?key=M3h2VXpfdTdaSFJHb0xsV0hjMVV4dWxFUWNPd3VB">
            <p style="font-size: 30px; color:#fa1484;font-style:italic">Ver más</p>
          </a>
        </div>

      </div>

      <button class="btn mt-5 text-center w-100" style="background-color:#fa1484" id="btInstagram">
        <a title="Instagram de Juan Luis" class="instagram">
          <i class="bi bi-instagram" style='font-size:26px;margin-left: 8px;color:white'></i></a>

        <p class="pt-1 " style="color:white">Instagram de Juan Luis para más</p>
      </button>
  </section><!-- End Services Section -->

</body>
<?php include "footer.php" ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

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

</html>

<script type="text/javascript">
  if (screen.width < 767 && screen.height < 924) {
    const elementos = document.querySelectorAll('.fancybox');
    elementos.forEach(function (elemento) {
      elemento.removeAttribute('href');
    });
  }
  else {
    $(document).ready(function () {
      $(".fancybox").fancybox({ 'hideOnContentClick': true });
      $("#fancybox-outer").fancybox().click(function () {
        $("#fancybox-overlay").click();
      });
    });
  }

</script>

<script>
  var boton = document.getElementById("btInstagram");

  boton.addEventListener("click", function () {
    window.location.href = "https://www.instagram.com/juanluisezcaray/";
  });
</script>