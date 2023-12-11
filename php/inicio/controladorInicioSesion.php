<?php
session_start();
require_once("./../../conexion/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    try {
        $pdo = conexion();

        $stmt = $pdo->prepare("SELECT id, nombre FROM Entrenador WHERE (correoElectronico = ? OR usuario = ?) AND contraseña = ?");
        $stmt->execute([$correo,$correo, $contrasena]);
        $entrenador = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt = $pdo->prepare("SELECT id, nombre FROM Administrador WHERE (correoElectronico = ? OR usuario = ?) AND contraseña = ?");
        $stmt->execute([$correo,$correo, $contrasena]);
        $administrador = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($entrenador) {
            $_SESSION["tipo"] = "Entrenador"; 
            $_SESSION["id_usuario"] = $entrenador["id"]; // Guardar el ID del usuario
            header("Location: ../../vistas/entrenador/indexEntrenador.php");
        } elseif ($administrador) {
            $_SESSION["tipo"] = "Administrador";
            $_SESSION["id_usuario"] = $administrador["id"]; // Guardar el ID del usuario
            header("Location: ../../vistas/admin/indexAdministrador.php");
        } else {
            echo '<script>alert("Usuario y/o contraseña incorrectos");</script>';
            header("Location: ./../../index.php");
        }

        $archivoIdUsuario = '../../conexion/sesion_id.txt';
        file_put_contents($archivoIdUsuario, $_SESSION["id_usuario"]);

    } catch (PDOException $e) {
        echo "Error en la consulta: " . $e->getMessage();
    }
}
?>