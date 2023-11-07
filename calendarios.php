<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


  <title>Café Central - Calendarios</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.js"></script>
  <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
</head>

<body>



  <?php include "header.php"?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="arte.php">Arte</a></li>
          <li>Calendarios</li>
        </ol>
        <h2>Calendarios</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="skills" class="skills">
      <div class="container">
        <div class="row justify-content-strech align-items-left">
         
          <div class="col-lg-12 ">
            <h3 style="color:#fa1484">Tradicional calendario del Café Central</h3>
            <p class="fst-italic" >
              Desde 1992, en el mes de diciembre, el Café Central edita un calendario ilustrando rincones locales, pintado por Juan Luis Pérez, cuyo beneficio se destina a la Cofradía de Nuestra Señora de Allende.
            </p>
          </div>
        </div>
      </div>
    </section>
    
    </section id="services" class="services"><!-- End Breadcrumbs -->
      <div class="container">
        <div class="row">
          <?php for($i=2023;$i>1991;$i--){  ?>
            <div class="col-lg-3 col-md-6 align-items-stretch" style="margin-bottom:25px">
               <a href="imagenes/calendarios/<?=$i?>.jpg" class="fancybox" > 
                <img class="img-fluid" src="imagenes/calendarios/<?=$i?>.jpg" alt="">
               </a>
            </div>

            <?php }?>      
           
        </div>
      </div>
    </section><!-- End Services Section -->           

    <!--<section id="hero" class="bg-transparent">
      <div class="hero-container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          
          <div class="carousel-inner">
              <div class="carousel-item active">
              <div class="row align-items-center">
                  <div class="col"></div>
                  <div class="col"> 
                      <img class="img-fluid" src="imagenes/calendarios/1992.JPG" alt="First slide">
                  </div>
                  <div class="col"></div>
              </div>
              </div>

              <?php for($i=1993;$i<1995;$i++){ ?>

              <div class="carousel-item">
              <div class="row align-items-center">
                  <div class="col"></div>
                  <div class="col"> 
                      <img class="img-fluid" src="imagenes/calendarios/<?=$i?>.JPG" alt="First slide">
                  </div>
                  <div class="col"></div>
              </div>
              </div>

              <?php }?>  
              
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>
          </div>
      </div>  
    </section>-->

  
  </main><!-- End #main -->

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

</body>

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