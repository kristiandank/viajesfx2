<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Agencia Viajes</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example">

    <div class="container mt-5 mb-5">
        <h2>Lista Clientes</h2>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a class="btn btn-primary me-md-2" type="button"
                href="http://localhost/viajesfx2/vista/cliente/cliente.php?accion=insert">Crear cliente</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombres</th>
                    <th scope="col">telefono</th>
                    <th scope="col">direccion</th>
                    <th scope="col">origen</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($objetoCliente as $cliente) { ?>
                <tr>
                    <th scope="row"><?php echo $cliente->id ?></th>
                    <td><?php echo $cliente->nombres ?></td>
                    <td><?php echo $cliente->telefono ?></td>
                    <td><?php echo $cliente->direccion ?></td>
                    <td><?php echo $cliente->origen ?></td>
                    <td>
                        <button onclick="verCliente(<?php echo $cliente->id ?>)" type="button"
                            class="btn btn-success">Ver</button>
                        <button onclick="actualizarCliente(<?php echo $cliente->id ?>)" type="button"
                            class="btn btn-info">Actualizar</button>
                        <button onclick="eliminarCliente(<?php echo $cliente->id ?>)" type="button"
                            class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>

    <!--modal-->
    <div id="myModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Insumo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="verCliente">

                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/productOperations.js"></script>

