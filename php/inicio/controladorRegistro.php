<?php

require_once("./../../conexion/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["registro"])) {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $rol = $_POST["rol"];

        try {
            $pdo = conexion();

            if ($rol === "entrenador") {
                $stmt = $pdo->prepare("INSERT INTO Entrenador (nombre, correoElectronico, usuario, contraseña) VALUES (?, ?, ?, ?)");
            } elseif ($rol === "administrador") {
                $stmt = $pdo->prepare("INSERT INTO Administrador (nombre, correoElectronico, usuario, contraseña) VALUES (?, ?, ?, ?)");
            } else {
                echo "console.error('Rol no válido');";
                exit();
            }

            $stmt->execute([$nombre, $correo, $usuario, $contrasena]);


            header("Location: index.html");
            exit();

        } catch (PDOException $e) {
            // Mensaje de error en la consola
            echo "console.error('Error al registrar usuario: " . $e->getMessage() . "');";
        }
    }
}
?>