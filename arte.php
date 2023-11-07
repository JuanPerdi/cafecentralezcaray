<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Café Central - Arte</title>
  <?php include("head.php");?>

</head>

<body>

  <?php include "header.php"?>
  
  <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Inicio</a></li>
          <li>Arte</li>
        </ol>
        <h2>Arte</h2>

      </div>
    </section>

    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <h2>Juan Luis Pérez</h2>
        </div>

        <div class="row justify-content-center align-items-center">
         
          <div>
            <img width="200"src="imagenes/juanluisBN.jpg" class="mx-auto d-block imagenSombra" alt="">
          </div>
        </div>
        <br><br>
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-11 content text-center">
            <h3 id="fraseBibliografia">“Pintar acuarela es algo que te atrapa. Esos trazos frescos repentinos, sus transparencias, tiene algo diferente a otras técnicas.”</h3>
            <p class="fst-italic" id="masInformacion" style="color:#fa1484;cursor:pointer">Más información </p>
            <p class="fst-italic" id="parrafoJuanLuis" style="display:none">
            Nacido en Ezcaray en octubre de 1964 y gran aficionado a las artes plásticas desde muy joven.
            Desde 1990 va realizando numerosas exposiciones. Se considera paisajista y en sus acuarelas vemos muchos de esos rincones y paisajes de su tierra. 
            Actualmente tiene una exposición permanente en su Café Central de Ezcaray.<br>
            Es una persona activa e inquieta, no solo en la pintura, gran aficionado a la fotografía,  "tallista en poliespan" de figuras para la Cabalgata de Ezcaray y belenista, cuyo trabajo se expone todas las navidades en su café.
            </p>

          </div>
        </div>

      </div>
    </section>


    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-lg-0">
          <a href="acuarelas.php"><div class="icon-box" name="rosa">
              <div class="icon"><i class="bi-pencil-fill"></i></div>
              <h4><a href="acuarelas.php">Acuarelas</a></h4>
              <p>Colección 2022 - 2023</p>
            </div></a>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-lg-0">
          <a href="fotografia.php"><div class="icon-box" name="rosa">
              <div class="icon"><i class="bx bi-camera-fill"></i></div>
              <h4><a href="fotografia.php">Fotografía</a></h4>
              <p>Fotografías de diferentes eventos</p>
            </div></a>
          </div>
          
          <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-lg-0">
          <a href="belen.php"><div class="icon-box" name="rosa">
              <div class="icon"><i class="bx bi-snow"></i></div>
              <h4><a href="belen.php">Belén</a></h4>
              <p>Tradiconal Belén navideño</p>
            </div></a>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4 ">
            <div class="icon-box" name='deshabilitado'>
              <div class="icon" style='background-color:#B0B0B0'><i class="bx bi-camera-fill" style="color:white"></i></div>
              <h4><a href="" style="color:white">Naturaleza</a></h4>
              <p style="color:white">La Sierra de La Demanda</p>
            </div>
          </div>

          <!--<div class="col-lg-4 col-md-6 align-items-stretch mt-4">
          <a href="centenario.php"><div class="icon-box " name="rosa">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="centenario.php">Centenario</a></h4>     
              <p>Fiesta anual desde 2016</p>
            </div></a>
          </div>-->

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4 ">
            <a href="calendarios.php"><div class="icon-box" name="rosa">
              <div class="icon"><i class="bx bi-calendar-fill"></i></div>
              <h4><a href="calendarios.php">Calendarios</a></h4>
              <p>Todos los calendarios desde 1992</p>
            </div></a>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4 ">
            <div class="icon-box" name='deshabilitado'>
              <div class="icon" style='background-color:#B0B0B0'><i class="bx bi-camera-fill" style="color:white"></i></div>
              <h4><a href="" style="color:white">Fotos antiguas</a></h4>
              <p style="color:white">Imágenes de la historia de Ezcaray</p>
            </div>
          </div>

        </div>

      </div>
    </section>

  
  </main>

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

  <script>
    // Obtener todos los elementos con el atributo "name" igual a "mi-nombre"
    var elementos = document.getElementsByName("deshabilitado");

    // Iterar sobre cada elemento y cambiar su color de fondo
    for (var i = 0; i < elementos.length; i++) {
      elementos[i].style.backgroundColor = "#E8E8E8"; // Cambiar el color de fondo a rojo
    }

  </script>

  <script>
      var suspensivos=document.getElementById('masInformacion');
      suspensivos.addEventListener('click',function(){
        document.getElementById('parrafoJuanLuis').style.display='';
        suspensivos.style.display='none';
      })
  </script>
  <script>
    if(screen.width<767 && screen.height<924){
        document.getElementById("fraseBibliografia").style.fontSize="20px";
    }
  </script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>