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
            <h1 class="text-white">Equipos</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section first-section">
      <div class="container">
        <div class="row">
          <div class="mb-4 d-flex align-items-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trackerModal">
              Agregar Equipo
            </button>


            <div class="modal fade-modal" id="trackerModal" tabindex="-1" aria-labelledby="nuevoProyecto"
              aria-hidden="true">
              <div class="modal-dialog-modal" style="min-width: 75%;">
                <div class="modal-content-modal">
                  <div class="modal-header-modal">
                    <h2 class="modal-title-modal" id="nuevoProyecto">Agregar Equipo</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span>&times;</span>
                    </button>
                  </div>

                  <div class="modal-body-modal">
                    <form method="post" enctype="multipart/form-data">
                      <!-- Variables para distinguir -->
                      <?php $accion = "insertar"; ?>

                      <div class="form-group">
                        <label for="nombre">Nombre del Equipo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" required>

                      </div>
                      <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" id="foto" name="foto">
                      </div>

                      <div class="form-group">
                        <label for="idEntrenador" hidden>ID_Entrenador</label>
                        <?php
                        // Lee el contenido del archivo sesion_id.txt
                        $sesionIdContent = file_get_contents("../../conexion/sesion_id.txt");
                        ?>
                        <input type="number" class="form-control" id="idEntrenador" name="idEntrenador"
                          placeholder="id-entrenador id" value="<?php echo htmlspecialchars($sesionIdContent); ?>"
                          required hidden>
                      </div>



                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <!-- Variables para distinguir -->
                      <button type="submit" name="accion" value="<?php echo $accion; ?>"
                        class="btn btn-primary">Enviar</button>
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
                    <form method="post" action="equipos.php" enctype="multipart/form-data">

                      <!-- Variables para distinguir -->
                      <?php $accion = "editar"; ?>


                      <div class="form-group">

                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="n" name="nombre1" placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="c" name="ciudad2" placeholder="Ciudad" required>
                      </div>
                      <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" id="f" name="foto2">
                      </div>
                      <div class="form-group">
                        <label for="id" hidden>ID_Entrenador</label>
                        <input type="number" class="form-control" id="id" name="id2" placeholder="id" required hidden>
                      </div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <!-- Variables para distinguir -->
                      <button type="submit" name="accion" value="<?php echo $accion; ?>"
                        class="btn btn-primary">Enviar</button>
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
              <th colspan='4'>EQUIPO</th>
              <th>ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $equipos = obtenerequipo(); // Cambié el nombre de la variable para evitar conflictos
            foreach ($equipos as $indice => $equipo) {
              echo "<tr>";
              echo "<td>  <img src='{$equipo['Foto']}' alt='Logo Equipo' width=200px height=200px> </td>";
              echo "<td colspan = '3'>
              <br>
              <strong class='text-white'>{$equipo['Nombre']}</strong>
              <br>
               ciudad : {$equipo['Ciudad']}
               <br>
               entrenador : {$equipo['IdEntrenador']}
              </td>";
              echo "<td>
              <br>
              <button type='button' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#update' onclick='llenarFormulario({$indice})'>
              Editar
          </button>
          <br>
          <br>

              <button type='button' class='btn btn-danger btn-sm' onclick='eliminarEquipo(\"{$equipo['Nombre']}\", this)'>
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
    function eliminarEquipo(nombreEquipo) {
      if (confirm("¿Estás seguro de que deseas eliminar este equipo?")) {
        // Enviar una solicitud AJAX al servidor para eliminar el equipo
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "equipos.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
          if (xhr.readyState == 4 && xhr.status == 200) {
            // Manejar la respuesta del servidor, por ejemplo, recargar la página
            location.reload();
          }
        };
        xhr.send("eliminarEquipo=1&nombreEquipo=" + encodeURIComponent(nombreEquipo));
      }
    }
  </script>
  <script>
    // Llenar con datos el formulario de editar
    var equipos = <?php echo json_encode($equipos); ?>;

    function llenarFormulario(indice) {
      var datosEquipo = equipos[indice];
      document.getElementById('n').value = datosEquipo.Nombre;
      document.getElementById('c').value = datosEquipo.Ciudad;
      document.getElementById('id').value = datosEquipo.IdEntrenador;

      // Verificar si hay una foto y mostrarla
      if (datosEquipo.foto_ruta) {
        // Aquí asumo que tienes un elemento de imagen con id 'foto-preview'
        document.getElementById('foto-preview').src = datosEquipo.foto_ruta;
      }

    }






  </script>


  <!-- aqui va-->

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
      // Crear objeto equipo
      $equipo = new stdClass();
      $equipo->nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
      $equipo->ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
      $equipo->IdEntrenador = isset($_POST['idEntrenador']) ? $_POST['idEntrenador'] : '';

      if (isset($_FILES["foto"])) {
        $foto_nombre = $_FILES["foto"]["name"];
        $foto_temp = $_FILES["foto"]["tmp_name"];
        $ruta_destino = "./../../Imagenes/" . $foto_nombre;

        // Mover la imagen a la ruta especificada
        if (move_uploaded_file($foto_temp, $ruta_destino)) {

          $equipo->foto_ruta = $ruta_destino;  // Asignar la ruta al objeto equipo
        } else {

        }


      }

      insertarequipo($equipo);

      recargar();
      //echo "<script>window.location.reload();</script>";
    } elseif ($accion == 'editar') {

      // Crear objeto equipo
      $equipo2 = new stdClass();
      $equipo2->nombre = isset($_POST['nombre1']) ? $_POST['nombre1'] : '';
      $equipo2->ciudad = isset($_POST['ciudad2']) ? $_POST['ciudad2'] : '';
      $equipo2->IdEntrenador = isset($_POST['id2']) ? $_POST['id2'] : '';

      if (isset($_FILES["foto2"])) {
        $foto_nombre = $_FILES["foto2"]["name"];
        $foto_temp = $_FILES["foto2"]["tmp_name"];
        $ruta_destino = "./../../Imagenes/" . $foto_nombre;

        // Mover la imagen a la ruta especificada
        if (move_uploaded_file($foto_temp, $ruta_destino)) {
          $equipo2->foto_ruta = $ruta_destino;  // Asignar la ruta al objeto equipo
        } else {
          // Manejar el error aquí si es necesario
        }
        //echo "<script>window.location.reload();</script>";
      }

      editarEquipo($equipo2);
      // Tu código PHP aquí
      recargar();
      // 
    }

  }

  function recargar()
  {
    echo "<script>
 
  function realizarRedireccion() {
   
      console.log('Redirección realizada');
      window.location.href = 'equipos.php';
  }
  window.onload = function() {
      realizarRedireccion();
  };
</script>";

  }



  function obtenerequipo()
  {
    $pdo = conexion();
    try {
      $sesion_id = file_get_contents("../../conexion/sesion_id.txt");

      $stmt = $pdo->prepare("SELECT equipo.*
      FROM equipo
      INNER JOIN entrenador ON equipo.idEntrenador = entrenador.ID
      WHERE equipo.IdEntrenador = :sesion_id");
      $stmt->bindParam(':sesion_id', $sesion_id, PDO::PARAM_STR); // Ajusta el tipo de dato según tus necesidades
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo "Error al obtener equipo: " . $e->getMessage();
      return [];
    }
  }





  function insertarequipo($equipo)
  {
    try {
      $pdo = conexion();

      // Preparar la sentencia SQL
      $stmt = $pdo->prepare("INSERT INTO equipo (nombre, ciudad, foto, idEntrenador) VALUES (:nombre, :ciudad, :foto, :id_entrenador)");

      // Vincular los parámetros
      $stmt->bindParam(":nombre", $equipo->nombre);
      $stmt->bindParam(":ciudad", $equipo->ciudad);
      $stmt->bindParam(":foto", $equipo->foto_ruta); // Bind directamente la ruta de la imagen
      $stmt->bindParam(":id_entrenador", $equipo->IdEntrenador);

      // Ejecutar la sentencia
      $stmt->execute();

      echo "Equipo insertado con éxito";
    } catch (PDOException $e) {
      echo "Error al insertar equipo: " . $e->getMessage();
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminarEquipo'])) {
    // Verificar si se ha enviado la solicitud de eliminación
    $nombreEquipo = $_POST['nombreEquipo'];
    eliminarEquipo($nombreEquipo);
  }
  function eliminarEquipo($nombreEquipo)
  {
    try {
      $pdo = conexion();
      $stmt = $pdo->prepare("DELETE FROM equipo WHERE nombre = :nombre");
      $stmt->bindParam(":nombre", $nombreEquipo);
      $stmt->execute();
      echo "Equipo eliminado con éxito";
    } catch (PDOException $e) {
      echo "Error al eliminar equipo: " . $e->getMessage();
    }
  }


  function editarEquipo($equipo2)
  {
    try {
      // Obtener la conexión mediante la función
      $conexion = conexion();

      // Consulta de actualización
      $sql = "UPDATE Equipo SET Ciudad = ?, IdEntrenador = ?";

      // Verificar si se envió una nueva imagen
      if (!empty($equipo2->foto_ruta)) {
        $sql .= ", Foto = ?";
      }

      $sql .= " WHERE Nombre = ?";

      $stmt = $conexion->prepare($sql);

      // Verificar si la consulta preparada es válida
      if ($stmt === false) {
        die("Error en la consulta: " . $conexion->errorInfo()[2]);
      }

      // Vincular parámetros y ejecutar la consulta
      $ciudad = $equipo2->ciudad;
      $idEntrenador = $equipo2->IdEntrenador;
      $ruta_destino = !empty($equipo2->foto_ruta) ? $equipo2->foto_ruta : null;
      $nombre = $equipo2->nombre;

      // Imprimir un mensaje con el ID del entrenador
      $stmt->bindParam(1, $ciudad);
      $stmt->bindParam(2, $idEntrenador);

      // Vincular la nueva imagen solo si se envió una
      if (!empty($equipo2->foto_ruta)) {
        $stmt->bindParam(3, $ruta_destino);
      }

      $stmt->bindParam(!empty($equipo2->foto_ruta) ? 4 : 3, $nombre);

      $result = $stmt->execute();

    } catch (PDOException $e) {
      die("Error en la conexión o consulta: " . $e->getMessage());
    }
  }

  ob_end_flush();
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
    font-size: 20px;
    align-items: center;
    text-align: left;
    color: whitesmoke;
    font-weight: bold;

  }

  th {
    justify-content: center;
    color: whitesmoke;
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
    font-size: 15px;
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