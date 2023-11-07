<?php ?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Café Central - Mapa de Ezcaray</title>
  <?php include("head.php");?>

</head>

<body>

    <?php include "header.php";?>

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Inicio</a></li>
          <li>Mapa de Ezcaray</li>
        </ol>
        <h2>Mapa de Ezcaray</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <main id="main">
    <br>
    
    </section id="services" class="services"><!-- End Breadcrumbs -->
    <div class="container">
    <div class="row">
         
         
         <h3 style="color:#fa1484">Puntos de interés de La Sierra de La Demanda y alrededores</h3>        

           <p class="fst-italic" >
             A continuación mostramos un <strong>mapa interactivo</strong> en el que se visualizan
             bastantes puntos de interés situados alrededor de todo el valle de Ezcaray.

             El mapa físico completo, con todos los senderos y mucha más información, se 
             encuentra disponible en el propio bar. <br><br>
             En la parte superior izquierda del mapa hay un botón desplegable para ver las agrupaciones
             de los diferentes puntos.
            
            </p>



            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MEl96-apvuGKt-KPrEj-aqvziqt3Q-g&ehbc=2E312F" 
              width="640" height="500"></iframe>

    </div>

    
    <br>
  
        
    </div><br>
    </section><!-- End Services Section -->      
    
    </main>

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
    <script>
      if(screen.width<767 && screen.height<924){
       document.getElementById("cartel").style='display:block;margin:auto;margin-bottom:20px';
       document.getElementById("premios").style='display:block;margin:auto';

        
    }
        
    </script>
</html>

