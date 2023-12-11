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
            <h1 class="text-white">Altas y Bajas</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section first-section">
      <div class="container">
        <div class="row">
          <div class="mb-4 d-flex align-items-center">

            <div class="modal fade" id="alta" tabindex="-1" aria-labelledby="nuevoProyecto" aria-hidden="true">
              <div class="modal-dialog" style="min-width: 75%;">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="nuevoProyecto">Dar de Alta</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span>&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form method="post">
                      <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="text" class="form-control" fecha="fecha" name="fecha" placeholder="Fecha" required>
                      </div>
                      <div class="form-group">
                        <label for="jugador">Jugador</label>
                        <input type="text" class="form-control" id="jugador" name="jugador" placeholder="Jugador"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="equipoanterior">Equipo Actual</label>
                        <input type="text" class="form-control" id="equipoanterior" name="equipoanterior"
                          placeholder="EquipoA" required>
                      </div>
                      <div class="form-group">
                        <label for="equiponuevo">Equipo a Cambiar</label>
                        <input type="number" class="form-control" id="equiponuevo" name="equiponuevo"
                          placeholder="EquipoNuevo" required>
                      </div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      
                    </form>
                  </div>

                </div>
              </div>
            </div>
            <div class="modal fade" id="baja" tabindex="-1" aria-labelledby="nuevoProyecto" aria-hidden="true">
              <div class="modal-dialog" style="min-width: 75%;">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="nuevoProyecto">Dar de Baja</h2>

                  </div>

                  <div class="modal-body">
                    <form method="post">
                      <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="text" class="form-control" fecha="fecha" name="fecha" placeholder="Fecha" required>
                      </div>
                      <div class="form-group">
                        <label for="jugador">Jugador</label>
                        <input type="text" class="form-control" id="jugador" name="jugador" placeholder="Jugador"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="equipoanterior">Equipo Actual</label>
                        <input type="text" class="form-control" id="equipoanterior" name="equipoanterior"
                          placeholder="EquipoA" required>
                      </div>
                      <div class="form-group">
                        <label for="equiponuevo">Equipo a Cambiar</label>
                        <input type="number" class="form-control" id="equiponuevo" name="equiponuevo"
                          placeholder="EquipoNuevo" required>
                      </div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary">Dar Baja</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
        <table class="table custom-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>EquipoAntiguo</th>
              <th>EquipoNuevo</th>
              <th>idEntrenador</th>
              <th>Motivo</th>
              <th>Fechahora</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $altasbajas = VisualizarBitacoras();
            foreach ($altasbajas as $bitacora) {
              echo "<tr>";
              echo "<td>{$bitacora['ID']}</td>";
              echo "<td>{$bitacora['NombreJugador']}</td>";
              echo "<td>{$bitacora['EquipoAntiguo']}</td>";
              echo "<td>{$bitacora['EquipoNuevo']}</td>";
              echo "<td>{$bitacora['IdEntrenador']}</td>";
              echo "<td>{$bitacora['Motivo']}</td>";
              echo "<td>{$bitacora['FechaHora']}</td>";
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
              <li><a href="#">All</a></li>
              <li><a href="#">Club News</a></li>
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
              </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i>
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




  function VisualizarBitacoras()
  {
    $pdo = conexion();
    try {
      $stmt = $pdo->prepare("SELECT * FROM bitacora");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo "Error al obtener altasbajas: " . $e->getMessage();
      return [];
    }
  }

  ?>
</body>

</html>