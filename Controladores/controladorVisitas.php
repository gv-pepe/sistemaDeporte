<?php
require_once("./conexion/conexion.php");

$pdo = conexion();
$id = 1;


// Consulta SQL para obtener el valor actual de visitas
$consulta = $pdo->prepare("SELECT visitas FROM page_views WHERE id = :id");
$consulta->bindParam(':id', $id, PDO::PARAM_INT);
$consulta->execute();

// Obtener el valor actual de visitas
$fila = $consulta->fetch(PDO::FETCH_ASSOC);
$visitasActuales = $fila['visitas'];

// Actualizar visitas sumando 1
$sql = "UPDATE page_views SET visitas = :nuevasVisitas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$nuevasVisitas = $visitasActuales + 1;
$stmt->bindParam(':nuevasVisitas', $nuevasVisitas, PDO::PARAM_INT);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

?>