<?php include "../../php/iniciopages.php"; ?>

<head>
<link rel="stylesheet" href="modaliu.css">

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
            <h1 class="text-white">Altas y Bajas</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section first-section">
      <div class="container">
        <div class="row">
          <div class="mb-4 d-flex align-items-center">

            <div class="modal fade-modal" id="alta" tabindex="-1" aria-labelledby="nuevoProyecto" aria-hidden="true">
              <div class="modal-dialog-modal" style="min-width: 75%;">
                <div class="modal-content-modal">
                  <div class="modal-header-modal">
                    <h2 class="modal-title-modal" id="nuevoProyecto">Dar de Alta</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span>&times;</span>
                    </button>
                  </div>

                  <div class="modal-body-modal">
                    <form method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre del Jugador</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                        <label for="equipoantiguo">Equipo Antiguo</label>
                        <input type="text" class="form-control" id="equipoantiguo" name="equipoantiguo" placeholder="Equipo Antiguo"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="equiponuevo">Equipo Nuevo</label>
                        <input type="text" class="form-control" id="equiponuevo" name="equiponuevo"
                          placeholder="Equipo Nuevo" required>
                      </div>
                      <div class="form-group">
                        <label for="id_entrenador">ID del Entrenador</label>
                        <input type="number" class="form-control" id="id_entrenador" name="id_entrenador"
                          placeholder="ID del Entrenador" required>
                      </div>
                      <div class="form-group">
                        <label for="motivo">Motivo</label>
                        <input type="text" class="form-control" id="motivo" name="motivo"
                          placeholder="Motivo" required>
                      </div>
                      <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="text" class="form-control" id="fecha" name="fecha"
                          placeholder="Fecha" required>
                      </div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary">Dar Alta</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>
            <div class="modal fade-modal" id="baja" tabindex="-1" aria-labelledby="nuevoProyecto" aria-hidden="true">
              <div class="modal-dialog-modal" style="min-width: 75%;">
                <div class="modal-content-modal">
                  <div class="modal-header-modal">
                    <h2 class="modal-title-modal" id="nuevoProyecto">Dar de Baja</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span>&times;</span>
                    </button>
                  </div>

                  <div class="modal-body-modal">
                    <form method="post">
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="text" class="form-control" fecha="fecha" name="fecha" placeholder="Fecha" required>
                      </div>
                      <div class="form-group">
                        <label for="jugador">Jugador</label>
                        <input type="text" class="form-control" id="jugador" name="jugador" placeholder="Jugador" required>
                      </div>
                      <div class="form-group">
                        <label for="equipoanterior">Equipo Actual</label>
                        <input type="text" class="form-control" id="equipoanterior" name="equipoanterior" placeholder="EquipoA"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="equiponuevo">Equipo a Cambiar</label>
                        <input type="number" class="form-control" id="equiponuevo" name="equiponuevo" placeholder="EquipoNuevo" required>
                      </div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary">Dar Baja</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="modal-dialog-success-success d-flex align-items-center">
            <div class="modal fade-success" id="successModal" tabindex="1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-success-success" >
                <div class="modal-content-success">
                  <div class="modal-header-success">
                    <h5 class="modal-title-success" id="successModalLabel">Éxito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body-success">
                  Jugador insertado con éxito
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade-error" id="errorModal" tabindex="1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-error" >
              <div class="modal-content-error">
                <div class="modal-header-error">
                  <h5 class="modal-title-error" id="errorModalLabel">Error</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body-error">
                  Error al insertar jugador.
                  Tenga en Cuenta que solo pueden estar 11 personas.
                  Por favor, inténtalo de nuevo.
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
  <?php
  function insertarbitacora($bitacora)
  {
      try {
          $pdo = conexion();
  
          // Preparar la sentencia SQL
          $stmt = $pdo->prepare("INSERT INTO bitacora(NombreJugador, EquipoAntiguo, EquipoNuevo, IdEntrenador, Motivo, FechaHora) VALUES (:nombre,:equipoantiguo, :equiponuevo, :id_entrenador, :motivo, :fecha)");
  
          // Vincular los parámetros
          $stmt->bindParam(":nombre", $bitacora->nombre);
          $stmt->bindParam(":equipoantiguo", $bitacora->equipoa);
          $stmt->bindParam(":equiponuevo", $bitacora->equipon);
          $stmt->bindParam(":id_entrenador", $bitacora->ident);
          $stmt->bindParam(":motivo", $bitacora->motivo);
          $stmt->bindParam(":fecha", $bitacora->fecha);
  
          // Ejecutar la sentencia
          $stmt->execute();
  
          echo "<script>$('#successModal').modal('show');</script>";
          VisualizarBitacoras();
          // mostrarbitacora();
      } catch (PDOException $e) {
        echo "<script>$('#errorModal').modal('show');</script>";
          echo "Error al insertar bitacora: " . $e->getMessage();
      }
  }
  
  // Verificar si se enviaron datos
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Crear objeto bitacora
      $bitacora = new stdClass();
      $bitacora->nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
      $bitacora->equipon = isset($_POST['equiponuevo']) ? $_POST['equiponuevo'] : '';
      $bitacora->equipoa = isset($_POST['equipoantiguo']) ? $_POST['equipoantiguo'] : '';
      $bitacora->ident = isset($_POST['id_entrenador']) ? $_POST['id_entrenador'] : '';
      $bitacora->motivo = isset($_POST['motivo']) ? $_POST['motivo'] : '';
      $bitacora->fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
             

      // Insertar equipo
      insertarbitacora($bitacora);
  
}

function VisualizarBitacoras() {
  $pdo = conexion();
  try {

    $sesion_id = file_get_contents("./../../Conexion/sesion_id.txt");
      
    $stmt = $pdo->prepare("SELECT * FROM bitacora WHERE idEntrenador = :sesion_id");
    $stmt->bindParam(':sesion_id', $sesion_id, PDO::PARAM_STR); // Ajusta el tipo de dato según tus necesidades
    $stmt->execute();


    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
      echo "Error al obtener altasbajas: " . $e->getMessage();
      return [];
  }
}

//Hay que tomar en cuenta la logica con que pueda el entrenador cambiar a su jugador solo de su mismo equipo  y tambien
//del cambio que solo sea de su mismo equipo

?>
</body>

</html>