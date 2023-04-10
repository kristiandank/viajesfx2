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
                href="http://localhost/viajesfx2/vista/viajes/viajes.php?accion=insert">Crear Viaje</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">lugar</th>
                    <th scope="col">fecha</th>
                    <th scope="col">hora</th>
                    <th scope="col">precio</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($objetoViaje as $viaje) { ?>
                <tr>
                    <th scope="row"><?php echo $viaje->id ?></th>
                    <td><?php echo $viaje->lugar ?></td>
                    <td><?php echo $viaje->fecha ?></td>
                    <td><?php echo $viaje->hora ?></td>
                    <td><?php echo $viaje->precio ?></td>
                    <td>
                        <button onclick="ver(<?php echo $viaje->id ?>)" type="button"
                            class="btn btn-success">Ver</button>
                        <button onclick="actualizar(<?php echo $viaje->id ?>)" type="button"
                            class="btn btn-info">Actualizar</button>
                        <button onclick="eliminar(<?php echo $viaje->id ?>)" type="button"
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
                <div class="modal-body" id="verViaje">

                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/vOperations.js"></script>

    <?php
require('../../menus/footer.php')
?>