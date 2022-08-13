<?php
require_once('conexion/conexion.php');

$sql = "SELECT id, nombre, comentario FROM contactos";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOL Clinica Cosmiatra & SPA</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!--header-->

  <nav class="navbar navbar-expand-sm navbarColor p-1">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <div class="d-flex justify-content-center align-items-center">
          <img src="./img/iconospa1.png" width="75px" alt="">
          <h5 style="color: #803011d5; font-size: 20px; font-weight:600; margin: 0;">SOL Clínica Cosmiatra & SPA
          </h5>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nosotros
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sobreNosotros.html">Sobre Nosotros</a></li>
              <li><a class="dropdown-item" href="contacto.php">Contacto</a></li>
              <li><a class="dropdown-item" href="preguntas.html">Preguntas</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servicios.html">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galerias.html">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://wa.me/7671030388" target="_blank">
              <span class="color-border text-white">Citas <i class="fa-solid fa-calendar-check fs-6 text-white"></i></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="imagen-nosotros mb-5"></div>

  <!-- <div class="imagen-nosotros"></div> -->
  <div>
    <div class="row">
      <div class="col-12 p-0 col-sm-8 m-0">
        <div class="container mt-2 mt-sm-5 p-3 p-sm-5">
          <div class="row">

            <div class="col-12 article">
              <article>
                <h2 class="text-center color-cafe">Masajes</h2>
                <br> 
                
                <p>Renueva tu piel con nuestros tratamientos faciales que tenemos para el cuidado de tu piel,
                  luce bella, luce radiante luce el sol que llevas dentro. Relaja el sistema nervioso eliminando el
                  cansancio
                  psíquico, elimina el dolor cervical y
                  aumenta el nivel de oxígeno que llega al cerebro.</p>
              </article>
            </div>
            <div class="col-12 ">
              <video src="./video/videouno.mp4" controls class="img-fluid "></video>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-4 sidebar">

        <div class="mt-3 text-center">
          <p class="text-center fw-bold">Autor</p>
          <p>Daisy Hernandez Vejar</p>
          <img class="img-fluid img-thumbnail" width="250px" src="./img/deysi.jpeg" alt="">
          <hr class="mx-auto w-75">
        </div>
        <div class="mt-3 text-center">
          <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/AlejandroNes.INFO/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=226593770685261&amp;container_width=213&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FAlejandroNes.INFO%2F&amp;locale=es_ES&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=">
            <span style="vertical-align: bottom; width: 200px; height: 250px;"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSOLClinicacosmiatra%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1249740652198278" width="340" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
            <hr class="mx-auto w-75">
          </div>
        </div>
        <div class="mt-3 text-center">
          <video src="./video/videodos.mp4" controls class=" ms-0 ms-sm-3" width="340px"></video>
          <hr class="mx-auto w-75">
        </div>
        <div class="mt-3 text-center">
          <p class="text-center fw-bold">Institución</p>
          <a href="http://uttc.edu.mx"><img class="img-fluid img-thumbnail" src="./img/institucion.jpg" alt=""></a>
        </div>
      </div>
    </div>
  </div>

  



  <hr class="text-muted mx-5">

  <br>




  <div class="container shadow border ">
    <div class="row">
      <div class="col-12 col-sm-7 p-3">
        <!--  columna 1 -->
        <h5 class="text-center">Danos tu opinión</h5>
        <form action="validarDatos.php" class="p-4" method="post">
          <!--aqui tengo quue poner el metodo post-->
          <div class="row">
            <div class="col-sm-6 mb-3">
              <div class="form-group">
                <label class="required-field" for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
              </div>
            </div>

            <div class="col-sm-6 mb-3">
              <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="telefono">
              </div>
            </div>


            <div class="col-sm-6 mb-3">
              <div class="form-group" <label for="Asunto">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="asunto">
              </div>
            </div>

            <div class="col-sm-6 mb-3">
              <div class="form-group">
                <label class="required-field" for="correo">Email</label>
                <input type="text" class="form-control" id="correo" name="correo" placeholder="wendy.apple@seed.com">
              </div>
            </div>


            <div class="col-sm-12 mb-3">
              <div class="form-group">
                <label class="required-field" for="comentario">Comentario</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="4" placeholder="comentario....."></textarea>
              </div>
            </div>


            <div class="col-sm-12 mb-3">
              <br>

              <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
            </div>

          </div>
        </form>



      </div>




      <div class="col-12 col-sm-5 p-3 aside">
        <div class=" p-5">
          <div class="d-flex text-white">
            <i class="fa-solid fa-location-dot"></i>
            <p>Ubicación</p>

          </div>
          <hr class="text-white">
          <div class="d-flex text-white">
            <i class="fa-solid fa-envelope-open-text"></i>
            <div>
              <p>Email</p>
              <p> sol_ca_@hotmail.com</p>
            </div>
          </div>
          <hr class="text-white" target="_black">
          <div class="d-flex text-white">
            <i class="fa-solid fa-mobile-retro"></i>
            <div>
              <p>Teléfono</p>
              <p>7671030338</p>

            </div>
          </div>

          <hr class="text-white">
          <div class="d-flex text-white">
            <i class=""></i>
            <div>
              <p>HORARIO DE ATENCION</p>
              <p>Lunes a Sábado de 09:00 a.m - 07:00 p.m</p>

            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

  <div class="p-3 mt-3 text-center border shadow mx-auto w-50">
    <h5 class="text-center">CAJA DE COMENTARIOS</h5>
    <?php if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="d-flex  align-items-center mx-auto">
          <img src="./img/user.png" width="40px" alt="user" class="me-2">
          <p class="mx-2 m-0"><span class="fw-bold">Nombre: </span><?php echo $row["nombre"]; ?></p>
          <p class="mx-2 m-0"><span class="fw-bold">Comentario: </span><?php echo $row["comentario"]; ?></p>
        </div>
    <?php
      }
    } else {
      echo "0 results";
    }
    ?>
  </div>

  <br><br><br><br><br>


  <footer>
    <!--comienza footer-->
    <div class="container">
      <!-- footer1-->
      <div class="row">
        <!--clase row-->
        <div class="col-12 col-sm-4 pd-footer">
          <div class="text-center"><img src="img/log.png" class="img-fluid rounded-start" alt=""></div>
        </div>
        <div class="col-12 col-sm-4">
          <h5 class="text-center cafe">Descripcion</h5>
          <p style="color:#000;" class="p-3">
            Iniciamos esta nueva etapa con el convencimiento de poder ofrecer más y mejores servicios en Sol clínica
            cosmiatra & SPA, La mejor versión de ti
            un espacio de bienestar y relajación donde poder perderte y cuidarte con la mejor ayuda profesional.
            Contamos 4 puntos importantes:
            Servicio al cliente, Calidad, Responsabilidad e Innovacion.
          </p>
        </div>


        <!-- ICONOS DEL SITIO -->
        <div class="col-12 col-sm-4 pd-footer text-center p-5">
          <h5 class="text-center cafe">Siguenos</h5>
          <a href="https://www.facebook.com/SOLClinicacosmiatra" target="_blank"><i class="fa-brands fa-facebook icono-facebook"></i></a>
          <a href="https://instagram.com/solclinicacosm?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram icono-instagram"></i></a>
          <a href="https://wa.me/7671030388" target="_blank"><i class="fa-brands fa-whatsapp icono-whatsapp"></i></a>
        </div>



      </div>
      <!--termina la clase row-->

    </div>
    <!--termina el footer1-->
    <div>

      <div class="derechos">
        <p>Copyright © 2022 - By Daisy Hernandez</p>

        <p>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-whatsapp"></i>
          <i class="fa-brands fa-instagram"></i>

        </p>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>