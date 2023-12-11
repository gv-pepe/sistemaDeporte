<?php require_once("./../../conexion/conexion.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Liga Nice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../../css/jquery-ui.css">
  <link rel="stylesheet" href="../../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../../fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../../css/aos.css">

  <link rel="stylesheet" href="../../css/style.css">

</head>

<body>

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">
    <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php">
              <img src="../../images/logo1.png" alt="Logo" width="90px">
            </a>
          </div>
          <div class="ml-auto">
            <?php require_once("nav.php"); ?>

            <a href="#"
              class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('../../images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 ml-auto">
            <h1 class="text-white">Copa Del Mundo</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="container">
      

      <div class="row">
        <div class="col-lg-12">
          
          <div class="d-flex team-vs">
            <span class="score">4-1</span>
            <div class="team-1 w-50 "style="background-color: red;">
              <div class="team-details w-100 text-center">
                <img src="../../images/logo_francia.jpg" alt="Image" class="img-fluid">
                <h3>Francia <span>(win)</span></h3>
                <ul class="list-unstyled">
                  <li>Anja Landry (7)</li>
                  <li>Eadie Salinas (12)</li>
                  <li>Ashton Allen (10)</li>
                  <li>Baxter Metcalfe (5)</li>
                </ul>
              </div>
            </div>
            <div class="team-2 w-50"style="background-color: red;">
              <div class="team-details w-100 text-center">
                <img src="../../images/logo_uruguay.png" alt="Image" class="img-fluid">
                <h3>Uruguay <span>(loss)</span></h3>
                <ul class="list-unstyled">
                  <li>Macauly Green (3)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    <div class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Noticias</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="../../images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">El berrinche de Neymar</h3>
                  <div class="author d-flex align-items-center">
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="../../images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Campeones por Messi</h3>
                  <div class="author d-flex align-items-center">
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="../../images/img_2.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Como elegir campeones</h3>
                  <div class="author d-flex align-items-center">
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <div class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Siguiente Partido</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                      <img src="../../images/logo_chile.png" alt="Image">
                      <h3>Argentina</h3>
                    </div>
                    <div>
                      <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                      <img src="../../images/logo_argentina.png" alt="Image">
                      <h3>Chile</h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="text-center widget-vs-contents mb-4">
                <h4>Copa Del Mundo</h4>
                <p class="mb-5">
                  <span class="d-block"> 20 de Diciembre del 2026</span>
                  <span class="d-block">9:30 AM</span>
                  <strong class="text-primary">Estadio Azteca</strong>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            
            <div class="widget-next-match">
            <table class="table custom-table">
  <thead>
    <tr>
      <th>POS</th>
      <th>Equipos</th>
      <th>Goles Totales</th> <!-- Added Total Goals column -->
    </tr>
  </thead>
  <tbody>
    <?php
    $consulta = "CALL ObtenerTotalGolesPorEquipo()";
    $conexion = conexion();
    $resultado = $conexion->query($consulta);

    $posicion = 1; // Added a counter for position

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<td>{$posicion}</td>"; // Display position
      echo "<td>{$fila['NombreEquipo']}</td>";
      echo "<td>{$fila['TotalGoles']}</td>"; // Display total goals
      echo "<td>{$fila['ValorAleatorio1']}</td>";
      echo "<td>{$fila['ValorAleatorio2']}</td>";
      echo "<td>{$fila['ValorAleatorio3']}</td>";
      echo "<td>{$fila['ValorAleatorio4']}</td>";
      echo "<td>{$fila['ValorAleatorio5']}</td>";
      echo "<td>{$fila['ValorAleatorio6']}</td>";
      echo "</tr>";

      $posicion++; // Increment position counter
    }

    // Close the result set and connection
    $resultado->closeCursor();
    $conexion = null;
    ?>
  </tbody>
</table>

            </div>

          </div>
        </div>
      </div>
    </div> 
  </div>
  <!-- .site-wrap -->

  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../js/jquery-ui.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.stellar.min.js"></script>
  <script src="../../js/jquery.countdown.min.js"></script>
  <script src="../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../js/jquery.easing.1.3.js"></script>
  <script src="../../js/aos.js"></script>
  <script src="../../js/jquery.fancybox.min.js"></script>
  <script src="../../js/jquery.sticky.js"></script>
  <script src="../../js/jquery.mb.YTPlayer.min.js"></script>


  <script src="../../js/main.js"></script>

</body>

</html>