function verViaje(id) {
  $("#myModal").modal("show");
  $("#verViaje").load("viajeController.php?accion=vista&id=" + id);
}

function eliminar(id) {
  Swal.fire({
    title: "Está seguro que deseas eliminar el viajeControlleriaje?",
    text: "No podrá revertir esto!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, eliminar!",
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = "viajeController.php?accion=delete&id=" + id;
    } else {
      Swal.fire("No se eliminó el cliente");
    }
  });
}

function actualizar(id) {
  location.href = "viajeController.php?accion=update&id=" + id;
}
