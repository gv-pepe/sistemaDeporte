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

          </div>
        </div>
      </div>
    </header>

    <div class="hero overlay" style="background-image: url('../../images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 mx-auto text-center">
            <h1 class="text-white">Entrenadores</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section first-section">
      <div class="container">
        <div class="row">
          <div class="mb-4 d-flex align-items-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trackerModal">
              Agregar entrenador
            </button>


            <div class="modal fade-modal" id="trackerModal" tabindex="-1" aria-labelledby="nuevoProyecto"
              aria-hidden="true">
              <div class="modal-dialog-modal" style="min-width: 75%;">
                <div class="modal-content-modal">
                  <div class="modal-header-modal">
                    <h2 class="modal-title-modal" id="nuevoProyecto">Agregar entrenador</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span>&times;</span>
                    </button>
                  </div>

                  <div class="modal-body-modal">
                    <form method="post" enctype="multipart/form-data">
                      <?php $accion = "insertar"; ?>
                      <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                        <label for="CorreoElectronico">Correo Electronico</label>
                        <input type="text" class="form-control" id="CorreoElectronico" name="CorreoElectronico"
                          placeholder="CorreoElectronico" required>
                      </div>
                      <div class="form-group">
                        <label for="Usuario">Usuario</label>
                        <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Usuario"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="Contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="Contraseña" name="Contraseña"
                          placeholder="Contraseña" required>
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
                    <form method="post" action="entrenadores.php" enctype="multipart/form-data">
                      <!--  AGREGUE EL CAMPO ID EN MODIFICAR POR LO NECESITAS PARA EL UPDATE-->
                      <?php $accion = "editar"; ?>
                      <div class="form-group">
                        <label for="id1">Id</label>
                        <input type="text" class="form-control" id="id1" name="id1" placeholder="Id" readonly required>
                      </div>
                      <div class="form-group">
                        <label for="Nombre1">Nombre</label>
                        <input type="text" class="form-control" id="Nombre1" name="Nombre1" placeholder="Nombre"
                          requireD>
                      </div>
                      <div class="form-group">
                        <label for="CorreoElectronico1">Correo Electronico</label>
                        <input type="text" class="form-control" id="CorreoElectronico1" name="CorreoElectronico1"
                          placeholder="CorreoElectronico" required>
                      </div>
                      <div class="form-group">
                        <label for="Usuario">Usuario</label>
                        <input type="text" class="form-control" id="Usuario1" name="Usuario1" placeholder="Usuario"
                          required>
                      </div>
                      <div class="form-group">
                        <label for="Contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="Contraseña1" name="Contraseña1"
                          placeholder="Contraseña" required>
                      </div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" name="accion" value="<?php echo $accion; ?>"
                        class="btn btn-primary">Actualizar</button>
                    </form>
                  </div>
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

                </div>
              </div>
            </div>
          </div>
        </div>
        <table class="table custom-table">
          <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CORREO ELECTRONICO</th>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
            <th>ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $entrenadores = obtenerEntrenadores();
            foreach ($entrenadores as $indice => $entrenador) {
              echo "<tr>";
              echo "<td>{$entrenador['ID']}</td>";
              echo "<td><strong class='text-white'>{$entrenador['Nombre']}</strong></td>";
              echo "<td>{$entrenador['CorreoElectronico']}</td>";
              echo "<td>{$entrenador['Usuario']}</td>";
              echo "<td>{$entrenador['Contraseña']}</td>";
              echo "<td>
                    <button type='button' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#update' onclick='llenarFormulario({$indice})'>
                      Editar
                    </button>
                    <button type='button' class='btn btn-danger btn-sm' onclick='eliminarEntrenador(\"{$entrenador['Nombre']}\")'>
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
    function eliminarEntrenador(nombreEntrenador) {
      if (confirm("¿Estás seguro de que deseas eliminar este entrenador?")) {
        // Enviar una solicitud AJAX al servidor para eliminar el entrenador
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "entrenadores.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
          if (xhr.readyState == 4 && xhr.status == 200) {
            // Manejar la respuesta del servidor, por ejemplo, recargar la página
            location.reload();
          }
        };
        xhr.send("eliminarEntrenador=1&nombreEntrenador=" + encodeURIComponent(nombreEntrenador));
      }
    }
  </script>


  <script>
    // Llenar con datos el formulario de editar
    var entrenadores = <?php echo json_encode($entrenadores); ?>;

    function llenarFormulario(indice) {
      // DEBEN SER LOS MISMOS NOMBRES QUE LA BASE DE DATOS
      var datosEntrenador = entrenadores[indice];
      document.getElementById('id1').value = datosEntrenador.ID;
      document.getElementById('Nombre1').value = datosEntrenador.Nombre;
      document.getElementById('CorreoElectronico1').value = datosEntrenador.CorreoElectronico;
      document.getElementById('Usuario1').value = datosEntrenador.Usuario;
      document.getElementById('Contraseña1').value = datosEntrenador.Contraseña;
    }




  </script>


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


  <script src="../js/main.js"></script>

  <?php


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = isset($_POST['accion']) ? $_POST['accion'] : '';
    //echo "Valor de accion: " . $accion;
    if ($accion == 'insertar') {
      // Crear objeto entrenador
      $entrenador = new stdClass();
      $entrenador->id = isset($_POST['ID']) ? $_POST['ID'] : '';
      $entrenador->nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : '';
      $entrenador->correo = isset($_POST['CorreoElectronico']) ? $_POST['CorreoElectronico'] : '';
      $entrenador->usuario = isset($_POST['Usuario']) ? $_POST['Usuario'] : '';
      $entrenador->contraseña = isset($_POST['Contraseña']) ? $_POST['Contraseña'] : '';

      insertarEntrenador($entrenador);

      recargar();
      //echo "<script>window.location.reload();</script>";
    } elseif ($accion == 'editar') {

      // IGUAL A ESTOS NOMBRES
      $entrenador2 = new stdClass();
      $entrenador2->id1 = isset($_POST['id1']) ? $_POST['id1'] : '';
      $entrenador2->nombre1 = isset($_POST['Nombre1']) ? $_POST['Nombre1'] : '';
      $entrenador2->correo1 = isset($_POST['CorreoElectronico1']) ? $_POST['CorreoElectronico1'] : '';
      $entrenador2->usuario1 = isset($_POST['Usuario1']) ? $_POST['Usuario1'] : '';
      $entrenador2->contraseña1 = isset($_POST['Contraseña1']) ? $_POST['Contraseña1'] : '';



      echo ($entrenador2->id1) . "<br>";
      echo ($entrenador2->nombre1) . "<br>";
      echo ($entrenador2->correo1) . "<br>";
      echo ($entrenador2->usuario1) . "<br>";
      echo ($entrenador2->contraseña1) . "<br>";


      editarEntrenador($entrenador2);
      recargar();
      // 
    }

  }

  function recargar()
  {
    echo "<script>
function realizarRedireccion() {
    console.log('Redirección realizada');
    window.location.href = 'entrenadores.php';
}

window.onload = function() {
    realizarRedireccion();
};
</script>";

  }

  function obtenerEntrenadores()
  {
    $pdo = conexion();
    try {
      $stmt = $pdo->prepare("SELECT * FROM entrenador");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo "Error al obtener entrenadores: " . $e->getMessage();
      return [];
    }
  }





  function insertarEntrenador($entrenador)
  {
    try {
      $pdo = conexion();

      // Preparar la sentencia SQL
      $stmt = $pdo->prepare("INSERT INTO entrenador (Nombre, CorreoElectronico, Usuario, Contraseña) VALUES (:Nombre , :Correo, :Usuario, :Contrasena)");

      // Vincular los parámetros
      $stmt->bindParam(':Nombre', $entrenador->nombre);
      $stmt->bindParam(':Correo', $entrenador->correo);
      $stmt->bindParam(':Usuario', $entrenador->usuario);
      $stmt->bindParam(':Contrasena', $entrenador->contraseña);

      // Ejecutar la sentencia
      $stmt->execute();

    } catch (PDOException $e) {
      echo "<script>alert('Error'); $('#errorModal').modal('show');</script>";
      echo "Error al insertar Entrenador: " . $e->getMessage();
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminarEntrenador'])) {
    // Verificar si se ha enviado la solicitud de eliminación
    $nombreEntrenador = $_POST['nombreEntrenador'];
    eliminarEntrenador($nombreEntrenador);
  }
  function eliminarEntrenador($nombreEntrenador)
  {
    try {
      $pdo = conexion();
      $stmt = $pdo->prepare("DELETE FROM entrenador WHERE Nombre = :Nombre");
      $stmt->bindParam(":Nombre", $nombreEntrenador);
      $stmt->execute();
      echo "Entrenador eliminado con éxito";
    } catch (PDOException $e) {
      echo "Error al eliminar Entrenador: " . $e->getMessage();
    }
  }


  function editarEntrenador($entrenador2)
  {
    try {
      // Obtener la conexión mediante la función
      $conexion = conexion();

      // Consulta de actualización
      $sql = "UPDATE entrenador SET Nombre = ?, CorreoElectronico = ?, Usuario = ?, Contraseña = ? WHERE ID = ?";

      $stmt = $conexion->prepare($sql);

      $nombre = $entrenador2->nombre1;    // ESTOS NOMBRES DEBEN SER LOS MISMOS QUE TIENES ARRIBA
      $correo = $entrenador2->correo1;
      $usuario = $entrenador2->usuario1;
      $contraseña = $entrenador2->contraseña1;
      $id = $entrenador2->id1;



      $stmt->bindParam(1, $nombre);
      $stmt->bindParam(2, $correo);
      $stmt->bindParam(3, $usuario);
      $stmt->bindParam(4, $contraseña);
      $stmt->bindParam(5, $id);

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