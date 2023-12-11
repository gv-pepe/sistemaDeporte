<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    function llenarCampoEquipoNuevo($pdo)
    {
        try {
            $id = file_get_contents("../../conexion/sesion_id.txt");
            $sql = "SELECT Equipo.Nombre
            FROM Equipo
            INNER JOIN Entrenador ON Equipo.IdEntrenador = Entrenador.ID
            WHERE Entrenador.ID = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $nombreEquipo = $row['Nombre'];


            echo $nombreEquipo;
        } catch (PDOException $e) {
            echo "Error al obtener el valor de visitas: " . $e->getMessage();
        }
    }

    $pdo = conexion();
    llenarCampoEquipoNuevo($pdo);
    ?>

    <?php
    function conexion()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=soccerOficial', 'root', '');
            return $pdo;
        } catch (PDOException $e) {
            echo "Error en la conexión a la base de datos: " . $e->getMessage();
            die();
        }
    }
    ?>
</body>

</html>