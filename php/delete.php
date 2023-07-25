<?php   
include('connect.php');

$query = "DELETE FROM incidencias WHERE id = " . $_POST['id'];

// Ejecuta la consulta en la base de datos
if ($conn->query($query) === TRUE) {
  echo "Producto eliminado con éxito";
  header("Location:../bitacora.php");
} else {
  echo "Error al eliminar producto: ";
}
?>
<a href="../bitacora.php"> Click aqui para regresar </a>