<?php include "../../php/iniciopages.php"; ?>
<?php require_once("./../../conexion/conexion.php"); ?>

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

            <a href="#"
              class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>

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


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trackerModal">
              Agregar Jugador
            </button>


            <div class="modal fade-modal" id="trackerModal" tabindex="-1" aria-labelledby="nuevoProyecto"
              aria-hidden="true">
              <div class="modal-dialog-modal" style="min-width: 75%;">
                <div class="modal-content-modal">
                  <div class="modal-header-modal">
                    <h2 class="modal-title-modal" id="nuevoProyecto">Agregar jugador</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span>&times;</span>
                    </button>
                  </div>

                  <div class="modal-body-modal">
                    <form method="post" enctype="multipart/form-data">
                      <?php $accion = "insertar"; ?>
                      <div class="form-group">
                        <label for="id">No. Jugador</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="No. Jugador" required>
                      </div>
                      <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                        <label for="posicion">Posición</label>
                        <input type="text" class="form-control" id="posicion" name="posicion" placeholder="Posición"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" required>
                      </div>
                      <div class="form-group">
                        <label for="estatura">Estatura</label>
                        <input type="number" step="0.01" class="form-control" id="estatura" name="estatura"
                          placeholder="Estatura" required>
                      </div>
                      <div class="form-group">
                        <label for="peso">Peso</label>
                        <input type="number" step="0.01" class="form-control" id="peso" name="peso" placeholder="Peso"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="nacionalidad">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad"
                          placeholder="Nacionalidad" required>
                      </div>
                      <div class="form-group">
                        <label for="equipo" hidden>Equipo</label>
                        <input type="text" class="form-control" id="equipo" name="equipo" placeholder="Equipo" hidden>
                      </div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" name="accion" value="<?php echo $accion; ?>"
                        class="btn btn-primary">Agregar</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>
            <div class="modal fade-modal" id="update" tabindex="-1" aria-labelledby="nuevoProyecto" aria-hidden="true">
              <div class="modal-dialog-modal" style="min-width: 75%;">
                <div class="modal-content-modal">
                  <div class="modal-header-modal">
                    <h2 class="modal-title-modal" id="nuevoProyecto">Actualizar</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span>&times;</span>
                    </button>
                  </div>

                  <div class="modal-body-modal">
                    <form method="post" action="jugadores.php" enctype="multipart/form-data">

                      <?php $accion = "editar"; ?>
                      <div class="form-group">
                        <label for="id1">No. Jugador</label>
                        <input type="text" class="form-control" id="id1" name="id1" placeholder="No. Jugador" required
                          readonly>
                      </div>
                      <div class="form-group">
                        <label for="nombre1">Nombre</label>
                        <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="Nombre"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="posicion1">Posición</label>
                        <input type="text" class="form-control" id="posicion1" name="posicion1" placeholder="Posicion"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="edad1">Edad</label>
                        <input type="text" class="form-control" id="edad1" name="edad1" placeholder="Edad" required>
                      </div>
                      <div class="form-group">
                        <label for="estatura1">Estatura</label>
                        <input type="number" step="0.01" class="form-control" id="estatura1" name="estatura1"
                          placeholder="Estatura" required>
                      </div>
                      <div class="form-group">
                        <label for="peso1">Peso</label>
                        <input type="number" step="0.01" class="form-control" id="peso1" name="peso1" placeholder="Peso"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="nacionalidad1">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidad1" name="nacionalidad1"
                          placeholder="Nacionalidad" required>
                      </div>
                      <div class="form-group">
                        <label for="equipo1">Equipo</label>
                        <input type="text" class="form-control" id="equipo1" name="equipo1" placeholder="Equipo">
                      </div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" name="accion" value="<?php echo $accion; ?>"
                        class="btn btn-primary">Actualizar</button>
                      <button type="submit" name="accion" value="<?php echo $accion = 'null' ?>"
                        class="btn btn-primary">Dar de baja</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-dialog-success-success d-flex align-items-center">
              <div class="modal fade-success" id="successModal" tabindex="1" role="dialog"
                aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-success-success">
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
              <div class="modal fade-error" id="errorModal" tabindex="1" role="dialog" aria-labelledby="errorModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-error">
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
                <th>NO. JUGADOR</th>
                <th>NOMBRE</th>
                <th>POS</th>
                <th>EDAD</th>
                <th>EST</th>
                <th>P</th>
                <th>NAC</th>
                <th>EQUIPO</th>
                <th>ACCIONES</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $jugadores = obtenerJugadores();
              foreach ($jugadores as $indice => $jugador) {
                echo "<tr>";
                echo "<td>{$jugador['id']}</td>";
                echo "<td><strong class='text-white'>{$jugador['nombre']}</strong></td>";
                echo "<td>{$jugador['posicion']}</td>";
                echo "<td>{$jugador['edad']}</td>";
                echo "<td>{$jugador['estatura']} m</td>";
                echo "<td>{$jugador['peso']} kg</td>";
                echo "<td>{$jugador['nacionalidad']}</td>";
                echo "<td>{$jugador['equipo']}</td>";
                echo "<td>
                    <button type='button' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#update' onclick='llenarFormulario({$indice})'>
                      Editar
                    </button>
                    <button type='button' class='btn btn-danger btn-sm' onclick='eliminarjugador(\"{$jugador['nombre']}\")'>
                      Eliminar
                    </button>
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
  <script>
    // ELIMINAR DE LA FILA
    function eliminarjugador(nombrejugador) {
      if (confirm("¿Estás seguro de que deseas eliminar este jugador?")) {
        // Enviar una solicitud AJAX al servidor para eliminar el jugador
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "jugadores.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
          if (xhr.readyState == 4 && xhr.status == 200) {
            // Manejar la respuesta del servidor, por ejemplo, recargar la página
            location.reload();
          }
        };
        xhr.send("eliminarjugador=1&nombrejugador=" + encodeURIComponent(nombrejugador));
      }
    }
  </script>
  <script>
    // Llenar con datos el formulario de editar
    var jugadores = <?php echo json_encode($jugadores); ?>;

    function llenarFormulario(indice) {
      var datosJugador = jugadores[indice];
      document.getElementById('id1').value = datosJugador.id;
      document.getElementById('nombre1').value = datosJugador.nombre;
      document.getElementById('posicion1').value = datosJugador.posicion;
      document.getElementById('edad1').value = datosJugador.edad;
      document.getElementById('estatura1').value = datosJugador.estatura;
      document.getElementById('peso1').value = datosJugador.peso;
      document.getElementById('nacionalidad1').value = datosJugador.nacionalidad;
      document.getElementById('equipo1').value = datosJugador.equipo;

      // Llena otros campos según sea necesario
    }

  </script>
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


  ob_start();


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = isset($_POST['accion']) ? $_POST['accion'] : '';
    //echo "Valor de accion: " . $accion;
    if ($accion == 'insertar') {
      // Crear objeto jugador
      $jugador = new stdClass();
      $jugador->id = isset($_POST['id']) ? $_POST['id'] : '';
      $jugador->nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
      $jugador->posicion = isset($_POST['posicion']) ? $_POST['posicion'] : '';
      $jugador->edad = isset($_POST['edad']) ? $_POST['edad'] : '';
      $jugador->estatura = isset($_POST['estatura']) ? $_POST['estatura'] : '';
      $jugador->peso = isset($_POST['peso']) ? $_POST['peso'] : '';
      $jugador->nacionalidad = isset($_POST['nacionalidad']) ? $_POST['nacionalidad'] : '';
      //$jugador->equipo = isset($_POST['equipo']) ? $_POST['equipo'] : '';
  
      insertarJugador($jugador);

      recargar();
      //echo "<script>window.location.reload();</script>";
    } elseif ($accion == 'editar') {

      // Crear objeto equipo
      $jugador2 = new stdClass();
      $jugador2->id = isset($_POST['id1']) ? $_POST['id1'] : '';
      $jugador2->nombre = isset($_POST['nombre1']) ? $_POST['nombre1'] : '';
      $jugador2->posicion = isset($_POST['posicion1']) ? $_POST['posicion1'] : '';
      $jugador2->edad = isset($_POST['edad1']) ? $_POST['edad1'] : '';
      $jugador2->estatura = isset($_POST['estatura1']) ? $_POST['estatura1'] : '';
      $jugador2->peso = isset($_POST['peso1']) ? $_POST['peso1'] : '';
      $jugador2->nacionalidad = isset($_POST['nacionalidad1']) ? $_POST['nacionalidad1'] : '';
      $jugador2->equipo = isset($_POST['equipo1']) ? $_POST['equipo1'] : '';


      echo ($jugador2->id . "<BR>");
      echo ($jugador2->nombre . "<br>");
      echo ($jugador2->posicion . "<br>");
      echo ($jugador2->edad . "<br>");
      echo ($jugador2->estatura . "<br>");
      echo ($jugador2->peso . "<br>");
      echo ($jugador2->nacionalidad . "<br>");
      echo ($jugador2->equipo . "<br>");

      editarjugador($jugador2);
      // Tu código PHP aquí
      recargar();
      // 
    } elseif ($accion == 'null') {

      // Crear objeto equipo
      $jugador3 = new stdClass();
      $jugador3->id = isset($_POST['id1']) ? $_POST['id1'] : '';
      $jugador3->nombre = isset($_POST['nombre1']) ? $_POST['nombre1'] : '';
      $jugador3->posicion = isset($_POST['posicion1']) ? $_POST['posicion1'] : '';
      $jugador3->edad = isset($_POST['edad1']) ? $_POST['edad1'] : '';
      $jugador3->estatura = isset($_POST['estatura1']) ? $_POST['estatura1'] : '';
      $jugador3->peso = isset($_POST['peso1']) ? $_POST['peso1'] : '';
      $jugador3->nacionalidad = isset($_POST['nacionalidad1']) ? $_POST['nacionalidad1'] : '';
      //$jugador3->equipo = isset($_POST['equipo1']) ? $_POST['equipo1'] : '';
  

      echo ($jugador3->id . "<BR>");
      echo ($jugador3->nombre . "<br>");
      echo ($jugador3->posicion . "<br>");
      echo ($jugador3->edad . "<br>");
      echo ($jugador3->estatura . "<br>");
      echo ($jugador3->peso . "<br>");
      echo ($jugador3->nacionalidad . "<br>");
      //echo ($jugador3->equipo . "<br>");
  


      bajajugador($jugador3);
      // Tu código PHP aquí
      recargar();

    }

  }

  function recargar()
  {
    echo "<script>
  // Función JavaScript que se ejecutará después de que la página se cargue
  function realizarRedireccion() {
      // Puedes agregar aquí cualquier lógica adicional en JavaScript si es necesario
      console.log('Redirección realizada');
      window.location.href = 'jugadores.php';
  }

  // Llama a la función JavaScript después de que la página se cargue
  window.onload = function() {
      realizarRedireccion();
  };
</script>";

  }

  function obtenerJugadores()
  {
    $pdo = conexion();
    try {
      $stmt = $pdo->prepare("SELECT * FROM jugadores");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo "Error al obtener jugadores: " . $e->getMessage();
      return [];
    }
  }





  function insertarJugador($jugador)
  {
    try {
      $pdo = conexion();

      // Preparar la sentencia SQL
      $stmt = $pdo->prepare("INSERT INTO jugadores (id, nombre, posicion, edad, estatura, peso, nacionalidad, equipo) VALUES (:id, :nombre, :posicion, :edad, :estatura, :peso, :nacionalidad, null)");

      // Vincular los parámetros
      $stmt->bindParam(':id', $jugador->id);
      $stmt->bindParam(':nombre', $jugador->nombre);
      $stmt->bindParam(':posicion', $jugador->posicion);
      $stmt->bindParam(':edad', $jugador->edad);
      $stmt->bindParam(':estatura', $jugador->estatura);
      $stmt->bindParam(':peso', $jugador->peso);
      $stmt->bindParam(':nacionalidad', $jugador->nacionalidad);
      //$stmt->bindParam(':equipo', $jugador->equipo);
  
      // Ejecutar la sentencia
      $stmt->execute();

      echo "<script>$('#successModal').modal('show');</script>";
      //echo "<script>window.location.reload();</script>";
    } catch (PDOException $e) {
      echo "<script>$('#errorModal').modal('show');</script>";
      echo "Error al insertar jugador: " . $e->getMessage();
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminarjugador'])) {
    // Verificar si se ha enviado la solicitud de eliminación
    $nombrejugador = $_POST['nombrejugador'];
    eliminarjugador($nombrejugador);
  }
  function eliminarjugador($nombrejugador)
  {
    try {
      $pdo = conexion();
      $stmt = $pdo->prepare("DELETE FROM jugadores WHERE nombre = :nombre");
      $stmt->bindParam(":nombre", $nombrejugador);
      $stmt->execute();
      echo "Jugador eliminado con éxito";
    } catch (PDOException $e) {
      echo "Error al eliminar jugador: " . $e->getMessage();
    }
  }


  function editarjugador($jugador2)
  {
    try {
      // Obtener la conexión mediante la función
      $conexion = conexion();

      // Consulta de actualización
      $sql = "UPDATE jugadores SET nombre = ?, posicion = ?, edad = ?, estatura = ?, peso = ?, nacionalidad = ?, equipo = ? WHERE id = ?";
      $stmt = $conexion->prepare($sql);

      // Verificar si la consulta preparada es válida
      if ($stmt === false) {
        die("Error en la consulta: " . $conexion->errorInfo()[2]);
      }

      // Vincular parámetros y ejecutar la consulta
      $nombre = $jugador2->nombre;
      $posicion = $jugador2->posicion;
      $edad = $jugador2->edad;
      $estatura = $jugador2->estatura;
      $peso = $jugador2->peso;
      $nacionalidad = $jugador2->nacionalidad;
      $equipo = $jugador2->equipo;
      $id = $jugador2->id; // Assuming id is the player's unique identifier in the database
  
      $stmt->bindParam(1, $nombre);
      $stmt->bindParam(2, $posicion);
      $stmt->bindParam(3, $edad);
      $stmt->bindParam(4, $estatura);
      $stmt->bindParam(5, $peso);
      $stmt->bindParam(6, $nacionalidad);
      $stmt->bindParam(7, $equipo);
      $stmt->bindParam(8, $id);

      $result = $stmt->execute();

      // Handle the result as needed
  
    } catch (PDOException $e) {
      die("Error en la conexión o consulta: " . $e->getMessage());
    }
  }





  function bajajugador($jugador3)
  {
    try {
      // Obtener la conexión mediante la función
      $conexion = conexion();

      // Consulta de actualización
      $sql = "UPDATE jugadores SET nombre = ?, posicion = ?, edad = ?, estatura = ?, peso = ?, nacionalidad = ?, equipo = NULL WHERE id = ?";
      $stmt = $conexion->prepare($sql);

      // Verificar si la consulta preparada es válida
      if ($stmt === false) {
        die("Error en la consulta: " . $conexion->errorInfo()[2]);
      }

      // Vincular parámetros y ejecutar la consulta
      $nombre = $jugador3->nombre;
      $posicion = $jugador3->posicion;
      $edad = $jugador3->edad;
      $estatura = $jugador3->estatura;
      $peso = $jugador3->peso;
      $nacionalidad = $jugador3->nacionalidad;
      //$equipo = $jugador3->equipo;
      $id = $jugador3->id; // Assuming id is the player's unique identifier in the database
  
      $stmt->bindParam(1, $nombre);
      $stmt->bindParam(2, $posicion);
      $stmt->bindParam(3, $edad);
      $stmt->bindParam(4, $estatura);
      $stmt->bindParam(5, $peso);
      $stmt->bindParam(6, $nacionalidad);
      //$stmt->bindParam(7, $equipo);
      $stmt->bindParam(7, $id);

      $result = $stmt->execute();

      // Handle the result as needed
  
    } catch (PDOException $e) {
      die("Error en la conexión o consulta: " . $e->getMessage());
    }
  }

  ob_end_flush();
  ?>

</body>

</html>