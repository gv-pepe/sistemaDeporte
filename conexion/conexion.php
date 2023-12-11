<?php
function conexion() {
    $pdo = new PDO('mysql:host=localhost;dbname=soccerOficial', 'root', '');
    return $pdo;
  }
?>
