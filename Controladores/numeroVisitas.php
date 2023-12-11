<?php
function mostrarContenido($rutaImagen, $rutaConexion) {
    try {
        require_once($rutaConexion);
        $pdo = conexion(); // Realiza la conexión dentro de la función

        $id = 1;
        $sql = "SELECT visitas FROM page_views WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $visitas = $row['visitas'];
            echo '<div style="position: absolute; top: 10px; left: 10px; background-color: rgba(255, 255, 255, 0.8); padding: 10px; border: 1px solid #ccc; z-index: 9999; border-radius: 7px;">
            <img style="max-width: 23px;" src="' . $rutaImagen . '">
            <div style="font-size: 18px;">' . $visitas . '</div>
            </div>';
        }
    } catch (PDOException $e) {
        echo "Error al obtener el valor de visitas: " . $e->getMessage();
    }
}
?>
