<?php include "../../php/iniciopages.php"; ?>
<?php require_once("./../../conexion/conexion.php"); ?>

<head>
  <style>
    /* Style for the modal content */
    .modal-content {
      background-color: #222831;
      color: white;
    }

    /* Style for modal title */
    .modal-title {
      color: white;
    }

    /* Style for modal body */
    .modal-body {
      color: white;
    }

    /* Style for modal close button */
    .modal-header button.close {
      color: white;
    }

    /* Style for modal input fields */
    .modal-body input[type="text"],
    .modal-body input[type="number"],
    .modal-body select {
      background-color: transparent;
      color: white;
      border: 1px solid white;
      /* White border for input fields */
    }

    /* Style for modal buttons */
    .modal-footer button {
      background-color: #007bff;
      /* Blue button background color */
      color: white;
    }
  </style>

</head>

<body>

<?php
require_once("./../../Controladores/numeroVisitas.php");
mostrarContenido("../../Controladores/ver.png", "../../conexion/conexion.php"); ?>



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
            <a href="../../index.php">
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
          <div class="col-lg-9 mx-auto text-center">
            <h1 class="text-white">Equipos</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section first-section">
      <div class="container">
        <div class="row">
          <div class="mb-4 d-flex align-items-center">



            <div class="modal fade" id="trackerModal" tabindex="-1" aria-labelledby="nuevoProyecto" aria-hidden="true">
              <div class="modal-dialog" style="min-width: 75%;">
                <div class="modal-content">
                  <div class="modal-header">

                  </div>


                </div>
              </div>
            </div>
            <div class="modal fade" id="update" tabindex="-1" aria-labelledby="nuevoProyecto" aria-hidden="true">
              <div class="modal-dialog" style="min-width: 75%;">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="nuevoProyecto">Actualizar</h2>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <table class="table custom-table">
          <thead>
            <th colspan='2'>EQUIPOS</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $equipos = obtenerequipo(); // Cambié el nombre de la variable para evitar conflictos
            
            foreach ($equipos as $equipo) {
              echo "<tr>";
              echo "<td><img src='{$equipo['Foto']}' alt='Logo Equipo' width=150px height=150px></td>";
              echo "<td style='font-weight: bold;'><strong class='text-white'>{$equipo['nombre']}
                </strong><br>
                Ciudad: {$equipo['ciudad']}
                </td>";

              echo "</tr>";
            }
            ?>

          </tbody>
        </table>

      </div>
    </div>
  </div>
  </div>


  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>
  <script src="../js/jquery.mb.YTPlayer.min.js"></script>
  <script src="../js/main.js"></script>

  <?php

  function obtenerequipo()
  {
    $pdo = conexion();
    try {
      $stmt = $pdo->prepare("SELECT  nombre, ciudad, Foto FROM equipo");

      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo "Error al obtener equipo: " . $e->getMessage();
      return [];
    }
  }
  ?>
</body>


<style>
  table {
    border-collapse: collapse;
    width: 100%;
    justify-content: center;
    text-align: center;
  }


  td {
    font-size: 25px;
    align-items: center;
    text-align: left;
    color: whitesmoke;
    font-weight: bold;
    background-color: black;
  }

  th {
    justify-content: center;
    color: whitesmoke;
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
    font-size: 25px;
    font-weight: bold;
  }

  img {
    max-width: 150px;
    max-height: 150px;
    display: block;
    margin: auto;
  }

  .team-cell {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
</style>



</html>