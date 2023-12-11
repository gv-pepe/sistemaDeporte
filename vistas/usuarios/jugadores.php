<?php include "../../php/iniciopages.php"; ?>

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
            <h1 class="text-white">Jugadores</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section first-section">
      <div class="container">
        <div class="row">
          <div class="mb-4 d-flex align-items-center">

          </div>
          <table class="table custom-table">
            <thead>
              <tr>
                <th>Id</th>
                <th>NOMBRE</th>
                <th>POS</th>
                <th>EDAD</th>
                <th>EST</th>
                <th>P</th>
                <th>NAC</th>
                <th>EQUIPO</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $jugadores = obtenerJugadores();
              foreach ($jugadores as $jugador) {
                echo "<tr>";
                echo "<td>{$jugador['id']}</td>";
                echo "<td><strong class='text-white'>{$jugador['nombre']}</strong></td>";
                echo "<td>{$jugador['posicion']}</td>";
                echo "<td>{$jugador['edad']}</td>";
                echo "<td>{$jugador['estatura']} m</td>";
                echo "<td>{$jugador['peso']} kg</td>";
                echo "<td>{$jugador['nacionalidad']}</td>";
                echo "<td>{$jugador['equipo']}</td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>

  <footer class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="widget mb-3">
            <h3>News</h3>
            <ul class="list-unstyled links">
              <li><a href="./../admin/indexAdministrador.php">Admin</a></li>
              <li><a href="./../entrenador/indexEntrenador.php">Coach</a></li>
              <li><a href="#">Media Center</a></li>
              <li><a href="#">Video</a></li>
              <li><a href="#">RSS</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="widget mb-3">
            <h3>Tickets</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Online Ticket</a></li>
              <li><a href="#">Payment and Prices</a></li>
              <li><a href="#">Contact &amp; Booking</a></li>
              <li><a href="#">Tickets</a></li>
              <li><a href="#">Coupon</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="widget mb-3">
            <h3>Matches</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Standings</a></li>
              <li><a href="#">World Cup</a></li>
              <li><a href="#">La Lega</a></li>
              <li><a href="#">Hyper Cup</a></li>
              <li><a href="#">World League</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="widget mb-3">
            <h3>Social</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Youtube</a></li>
            </ul>
          </div>
        </div>

      </div>

      <div class="row text-center">
        <div class="col-md-12">
          <div class=" pt-5">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart"
                aria-hidden="true"></i>
              by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>

      </div>
    </div>
  </footer>
  </div>
  <!-- .site-wrap -->
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

  function obtenerJugadores()
  {
    $pdo = conexion();
    try {
      $stmt = $pdo->prepare("SELECT * FROM jugadores ");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo "Error al obtener jugadores: " . $e->getMessage();
      return [];
    }
  }

  ?>
</body>

</html>