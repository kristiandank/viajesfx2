<?php
require('../../menus/headerdentro.php')
?>


<body>
<div class="container mt-5">
    <h2>Insertar Viaje</h2>
    <form action="../../controlador/viajeController.php" method="POST">
     
        <input type="hidden" name="accion" value="insert">

        <div class="mb-3">
            <label for="lugar" class="form-label">lugar</label>
            <input type="text" class="form-control" id="lugar" name="lugar">
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha">
        </div>

        <div class="mb-3">
            <label for="hora" class="form-label">hora</label>
            <input class="text" id="hora" name="hora">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">precio</label>
            <input class="text" id="precio" name="precio">
        </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
        <a type="submit" class="btn btn-primary" href="http://localhost/viajesfx2/index.php">Regresar</a>
   
    </form>
</div>


<?php
require('../../menus/footer.php')
?>