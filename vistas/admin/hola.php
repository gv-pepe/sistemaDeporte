<div class="form-group">
    <label for="idEntrenador">ID_Entrenador</label>
    <?php
    // Lee el contenido del archivo sesion_id.txt
    $sesionIdContent = file_get_contents("../../conexion/sesion_id.txt");
    ?>
    <input type="number" class="form-control" id="idEntrenador" name="idEntrenador"
           placeholder="id-entrenador id" value="<?php echo htmlspecialchars($sesionIdContent); ?>" required>
</div>
