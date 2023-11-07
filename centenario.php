<?php ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


  <title>Café Central - Centenario</title>
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

  <?php include "header.php"; ?>

  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="index.php">Inicio</a></li>
        <li>Centenario</li>
      </ol>
      <h2>Centenario</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <main id="main">
    <br>

    </section id="services" class="services"><!-- End Breadcrumbs -->
    <div class="container">
      <div class="row">

        <div class="col-lg-12 content">
          <h3 style="color:#fa1484">Fiesta temática anual</h3>
          <p class="fst-italic">
            Desde 2016, celebramos todos los años una fiesta en noviembre, con motivo
            de celebrar un año más y de reunirnos con todos vosotros para pasar una noche de
            diez. Eso sí, deberás venir con la indumentaria correspondiente a la temática.

          </p>
        </div>
      </div>
      <br>

      <!--Año 2023, CIRCO -->
      <h2 class="animate__animated animate__fadeInDown">
        2023<span style="color:#fa1484">
          Circo
        </span>
      </h2>
      <p>El 25 de noviembre de 2023 celebramos de nuevo nuestra fiesta, este año con temática de circo
        antiguo. Todo aquel que quiera venir será más que bienvenido. Acompáñanos a celebrar nuestro 121 aniversario!
      </p>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-5 mt-2" style="height: 40%;">
          <a href="imagenes/centenario/circo/cartelVertical.jpg"  class="fancybox">
            <img class="img-fluid imagenSombra" src="imagenes/centenario/circo/cartelVertical.jpg" alt="">
          </a>
        </div>
      </div>


      <?php for ($ano = 2022; $ano > 2015; $ano--):
        if ($ano == 2022):
          $tematica = 'centenario';
          $nombre = 'Central Gangster';
          $link = 'https://mega.nz/folder/ZC0wgZqB#Yx7slQGkAhYAlnYwgNe7oQ';
        endif;
        if ($ano == 2021):
          $tematica = 'hospital';
          $nombre = 'Hospital Central';
          $link = 'https://mega.nz/folder/BC1nDBpb#7un4L0ryTMmmYk4aG64P1Q';
        endif;
        if ($ano == 2019):
          $tematica = 'moteros';
          $nombre = 'Moteros';
          $link = 'https://mega.nz/folder/MWsgWIyR#jyoOkRACbqmkbE0ws72Z-A';
        endif;
        if ($ano == 2018):
          $tematica = 'piratas';
          $nombre = 'Pirate Tabern';
          $link = 'https://mega.nz/folder/QXsCUBzb#9acjZMTUnOP8lDQMqEZkDg';
        endif;
        if ($ano == 2017):
          $tematica = 'oeste';
          $nombre = 'Viejo Oeste';
          $link = 'https://mega.nz/folder/EWkSFQSJ#GtgR4vySQeqRA1dMdwJM9g';
        endif;
        if ($ano == 2016):
          $tematica = 'epoca';
          $nombre = 'Años 20';
          $link = 'https://mega.nz/folder/gK9VkKab#zVKf9Y8ypXHsyyFT-UwsFg';
        endif;
        ?>

        <?php if ($ano != 2020): ?>

          <h2 class="animate__animated animate__fadeInDown">
            <?= $ano ?> <span style="color:#fa1484">
              <?= $nombre ?>
            </span>
            <i class="bi bi-arrow-up-square-fill" style="color:#fa1484" name='flecha' id="<?= $ano ?>"></i>
          </h2>

          <br>
          <div class="row" id="row<?= $ano ?>" style="display:none">

            <?php
            for ($i = 1; $i < 8; $i++) { ?>
              <div class="col-lg-4 col-md-6 align-items-stretch" style="margin-bottom:25px">
                <a href="imagenes/centenario/<?= $tematica ?><?= $i ?>.jpg" class="fancybox">
                  <img class="img-fluid imagenSombra" src="imagenes/centenario/1x1/<?= $tematica ?><?= $i ?>.jpg" alt="">
                </a>
              </div>
            <?php } ?>

            <div class="col-lg-4 col-md-6"
              style="display: flex; justify-content: center; align-items: center; margin-bottom:25px;">
              <a href="<?= $link ?>">
                <p style="text-align: center; font-size: 30px; color:#fa1484;font-style:italic">Ver más</p>
              </a>
            </div>

          </div><br>
          </section><!-- End Services Section -->

        <?php endif;
      endfor; ?>


  </main>

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