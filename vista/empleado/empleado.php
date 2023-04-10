<body>
<div class="container mt-5">
    <h2>Insertar Empleado</h2>
    <form action="../../controlador/empleadoController.php" method="POST">
        <input type="hidden" name="accion" value="insert">

        <div class="mb-3">
            <label for="nombre" class="form-label">nombres</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">edad</label>
            <input type="text" class="form-control" id="edad" name="edad">
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">telefono</label>
            <input class="text" id="telefono" name="telefono">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">direccion</label>
            <input class="text" id="direccion" name="direccion">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>
</body>