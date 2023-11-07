<?php ?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Café Central - Acuarelas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


  <!-- Favicons -->
  <link href="imagenes/logo.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

    <?php include "header.php"?>

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="arte.php">Arte</a></li>
          <li>Acuarelas</li>
        </ol>
        <h2>Acuarelas</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services"><!-- End Breadcrumbs -->
      <div class="container">

      <div class="row">
         
        <div class="col-lg-8 content">
        <h3 style="color:#fa1484">Exposición permanente de acuarelas en el Café Central</h3>
          <p class="fst-italic">
            Las acuarelas siguientes están disponibles a la venta en el Café Central.
          </p>
        </div>
       </div>
        <br>
       
        <div class="col-lg-6 content">
          <h3>Marzo 2023</h3>
          <p class="fst-italic">
            
          </p>
        </div>
        <br>
        <div class="row">
          <?php for($i=8;$i<15;$i++){  ?>
            <div class="col-lg-3 col-md-6 align-items-stretch" style="margin-bottom:25px">
               <a href="imagenes/acuarelas/acuarela<?=$i?>.jpg" class="fancybox" > 
               <img class="img-fluid imagenSombra" src="imagenes/acuarelas/acuarela<?=$i?>.jpg" alt="">
               </a>
            </div>

            <?php }?>      
        </div>
        <br>

        <div class="col-lg-6 content">
          <h3>"Zapatillas"</h3>
          <p class="fst-italic">
            
          </p>
        </div>
        <br>
        <div class="row">
          <?php for($i=1;$i<5;$i++){  ?>
            <div class="col-lg-3 col-md-6 align-items-stretch" style="margin-bottom:25px">
               <a href="imagenes/acuarelas/zapatilla<?=$i?>.jpg" class="fancybox" > 
               <img class="img-fluid imagenSombra" src="imagenes/acuarelas/zapatilla<?=$i?>.jpg" alt="">
               </a>
            </div>

            <?php }?>      
        </div>
      </div>
    </section><!-- End Services Section -->           

    </body>
    <?php include "footer.php"?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
    if(screen.width<767 && screen.height<924){
      const elementos = document.querySelectorAll('.fancybox');
      elementos.forEach(function(elemento) {
        elemento.removeAttribute('href');
      });
    }  
    else{
      $(document).ready(function() {
        $(".fancybox").fancybox({ 'hideOnContentClick': true });
        $("#fancybox-outer").fancybox().click( function() {
               $("#fancybox-overlay").click();
         });
    });
    }
 
</script>