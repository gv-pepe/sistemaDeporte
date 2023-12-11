<?php include "../../php/iniciopages.php"; ?>

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
          <nav class="site-navigation position-relative text-right" role="navigation">
          <?php require_once("nav.php"); ?>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
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

function obtenerJugadores() {
  $pdo = conexion();
  try {
      $stmt = $pdo->prepare("SELECT * FROM jugadores Where Equipo is NULL");
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