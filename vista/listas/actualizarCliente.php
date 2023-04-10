<?php  require('../menus/headerdentro.php')?>

<div class="container mt-5">
    <h2>Actualizar Cliente</h2>
    <form action="../controlador/ListController.php" method="POST">
    <input type="hidden" name="accion" value="update">
    <div class="mb-3">
    <input type="hidden" name="id" value="<?php echo $objetoCliente->id ?>">
              
        </div>
        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $objetoCliente->nombres ?>">
        
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>

            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $objetoCliente->telefono ?>">
        
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion</label>

            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $objetoCliente->direccion ?>">
        
        </div>
        <div class="mb-3">
            <label for="origen" class="form-label">Origen</label>            
            <input type="text" class="form-control" id="origen" name="origen" value="<?php echo $objetoCliente->origen ?>">
        
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

