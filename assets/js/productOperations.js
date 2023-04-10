function verCliente(id) {
  $("#myModal").modal("show");
  $("#verCliente").load("ListController.php?accion=vistaCliente&id=" + id);
}

function eliminarCliente(id) {
  Swal.fire({
    title: "Está seguro que deseas eliminar el cliente?",
    text: "No podrá revertir esto!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, eliminar!",
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = "ListController.php?accion=delete&id=" + id;
    } else {
      Swal.fire("No se eliminó el cliente");
    }
  });
}

function actualizarCliente(id) {
  location.href = "ListController.php?accion=update&id=" + id;
}
