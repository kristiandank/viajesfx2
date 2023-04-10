<?php  require('../menus/headerdentro.php')?>

<div class="container mt-5">
    <h2>Actualizar</h2>
    <form action="../controlador/ListController.php" method="POST">
    <input type="hidden" name="accion" value="update">
    <div class="mb-3">
    <input type="hidden" name="id" value="<?php echo $objetoViaje->id ?>">
              
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo $objetoViaje->fecha ?>">
        
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Telefono</label>

            <input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo $objetoViaje-> ?>">
        
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">Direccion</label>

            <input type="text" class="form-control" id="hora" name="hora" value="<?php echo $objetoViaje->hora ?>">
        
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">precio</label>            
            <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $objetoViaje->precio ?>">
        
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

