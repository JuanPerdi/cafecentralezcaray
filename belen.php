<?php ?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


  <title>Café Central - Belén</title>
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
          <li>Belén</li>
        </ol>
        <h2>Belén</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services"><!-- End Breadcrumbs -->
      <div class="container">

        <div class="row">
            <div class="col-lg-12 content">
            <h3 style="color:#fa1484">Tradicional Belén navideño del Café Central</h3>
            <p class="fst-italic">
                Desde 1995 se expone todas las navidades el <strong>Belén artesanal</strong> creado por <strong>Juan Luis Pérez</strong>,
                ambientado en esta zona del Valle del Oja, a principios del siglo XX. En el se puede ver representados lugares de la zona, como la Iglesia de Turza, la fuente de Tres Fuentes,
                el molino de Urdanta, la Argolla del Fuero de Ezcaray, la casa del Café Central...<br><br>
                Un pueblecito que crece año a año, <strong>más de 100 personajes con sus "vidas"</strong> y sus quehaceres, la matanza, la fragua, el molino,
                el carpintero, el frutero, autoridades, señoras, niños y caballeros. Pastores, Herodes, los Reyes Magos, el ángel...  <strong>Varios de ellos con movimiento</strong>
                y todos los años con algún guiño de la actualidad. 
                Figuritas hechas con pasta de barro, movimientos con alambres y motores, fuentes y río con agua, hoguera y chimenea que humean, tendido eléctrico, farolas 
                y un sin fin de cables y enchufes.<br><br>
                Ocupa una superficie de 4 metros cuadrados. En un lado encontramos la plaza con su crucero y las calles, y en el otro las huertas, la iglesia, una mina, la ferrería... 
                Y en el centro de la escena, custodiado por dos ángeles desde lo alto, el humilde establo que da cobijo a Jesús, José y María.

            </p>
            </div>
        </div>
        <br>
        <!-- plaza del pueblo -->
        <div class="col-lg-6 content">
          <h4 >Ambiente en la plaza del pueblo</h4>
          <p class="fst-italic">
          </p>
        </div>
        <div class="row">
          <?php for($i=1;$i<4;$i++){  ?>
            <div class="col-lg-3 col-md-6 align-items-stretch" style="margin-bottom:25px">
               <a href="imagenes/belen/1belen<?=$i?>.jpg" class="fancybox" > 
               <img class="img-fluid imagenSombra" src="imagenes/belen/1belen<?=$i?>.jpg" alt="">
               </a>
            </div>

            <?php }?>      
        </div><br>

        <!-- Pastores en la hoguera -->
        <div class="col-lg-6 content">
          <h4>Pastores en la hoguera</h4>
        </div>
        <div class="row">
          <?php for($i=1;$i<2;$i++){  ?>
            <div class="col-lg-3 col-md-6 align-items-stretch" style="margin-bottom:25px">
               <a href="imagenes/belen/2belen<?=$i?>.jpg" class="fancybox" > 
               <img class="img-fluid imagenSombra" src="imagenes/belen/2belen<?=$i?>.jpg" alt="">
               </a>
            </div>

            <?php }?>      
        </div><br>
        <!-- El Nacimiento -->
        <div class="col-lg-6 content">
          <h4>El Nacimiento</h4>
        </div>
        <div class="row">
          <?php for($i=1;$i<4;$i++){  ?>
            <div class="col-lg-3 col-md-6 align-items-stretch" style="margin-bottom:25px">
               <a href="imagenes/belen/3belen<?=$i?>.jpg" class="fancybox" > 
               <img class="img-fluid imagenSombra" src="imagenes/belen/3belen<?=$i?>.jpg" alt="">
               </a>
            </div>

            <?php }?>      
        </div><br>
        <!-- El río y las huertas -->
        <div class="col-lg-6 content">
          <h4>El río y las huertas</h4>
        </div>
        <div class="row">
          <?php for($i=1;$i<7;$i++){  ?>
            <div class="col-lg-3 col-md-6 align-items-stretch" style="margin-bottom:25px">
               <a href="imagenes/belen/4belen<?=$i?>.jpg" class="fancybox" > 
               <img class="img-fluid imagenSombra" src="imagenes/belen/4belen<?=$i?>.jpg" alt="">
               </a>
            </div>

            <?php }?>      
        </div><br>

        <!-- El puente -->
        <div class="col-lg-6 content">
          <h4>El puente</h4>
        </div>
        <div class="row">
          <?php for($i=1;$i<4;$i++){  ?>
            <div class="col-lg-3 col-md-6 align-items-stretch" style="margin-bottom:25px">
               <a href="imagenes/belen/5belen<?=$i?>.jpg" class="fancybox" > 
               <img class="img-fluid imagenSombra" src="imagenes/belen/5belen<?=$i?>.jpg" alt="">
               </a>
            </div>

            <?php }?>      
        </div><br>

        <!-- Tres Fuentes e Iglesia de Turza -->
        <div class="col-lg-6 content">
          <h4>Tres Fuentes e Iglesia de Turza</h4>
        </div>
        <div class="row">
          <?php for($i=1;$i<4;$i++){  ?>
            <div class="col-lg-3 col-md-6 align-items-stretch" style="margin-bottom:25px">
               <a href="imagenes/belen/6belen<?=$i?>.jpg" class="fancybox" > 
               <img class="img-fluid imagenSombra" src="imagenes/belen/6belen<?=$i?>.jpg" alt="">
               </a>
            </div>

            <?php }?>      
        </div><br>

        <!-- Tres fuentes e Iglesia de Turza -->
        <div class="col-lg-6 content">
          <h4>Molino, ferrería y central</h4>
        </div>
        <div class="row">
          <?php for($i=1;$i<4;$i++){  ?>
            <div class="col-lg-3 col-md-6 align-items-stretch" style="margin-bottom:25px">
               <a href="imagenes/belen/8belen<?=$i?>.jpg" class="fancybox" > 
               <img class="img-fluid imagenSombra" src="imagenes/belen/8belen<?=$i?>.jpg" alt="">
               </a>
            </div>

            <?php }?>      
        </div>

      </div>
        <br>
       
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