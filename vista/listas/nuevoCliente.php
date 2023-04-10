<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" _msttexthash="381446" _msthash="266">Agencia de Viajes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" _msthidden="A" _mstaria-label="320099" _msthash="267">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="../vista/viajes/viajes.php" _msttexthash="59059" _msthash="268">Viajes</a>
            <a class="nav-link" href="../../vista/cliente/cliente.php" _msttexthash="136006" _msthash="269">Cliente</a>
            <a class="nav-link" href="../../vista/empleado/empleado.php" _msttexthash="95589" _msthash="270">Empleado</a>
            <a class="nav-link" href="../../vista/listas/listaClientes.php" _msttexthash="95589" _msthash="270">Lista CLientes</a>

          </div>
        </div>
      </div>
    </nav>

<div class="container mt-5">
    <h2>Insertar Cliente</h2>
    <form action="../controlador/ListController.php" method="POST">
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
    </form>
</div>

</body>

</html>