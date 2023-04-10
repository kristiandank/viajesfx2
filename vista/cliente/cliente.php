<?php
require('../../menus/headerdentro.php')
?>

<div class="container mt-5">
    <h2>Insertar Cliente</h2>
    <form action="../../controlador/ListController.php" method="POST">
        
        <input type="hidden" name="accion" value="insert">
        <div class="mb-3">
            <label for="nombres" class="form-label">nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres">
        </div>
       
        <div class="mb-3">
            <label for="telefono" class="form-label">telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion">
        </div>
        <div class="mb-3">
            <label for="origen" class="form-label">origen</label>
            <input class="text" id="origen" name="origen">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
        <a type="submit" class="btn btn-primary" href="http://localhost/viajesfx2/index.php">Regresar</a>
   
    </form>
</div>


<?php
require('../../menus/footer.php')
?>