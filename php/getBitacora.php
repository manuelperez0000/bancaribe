<?php
include('connect.php');
include('icons.php');
$query = "SELECT * FROM incidencias";

$resultado = $conn->query($query);

// Verifica si hay algún error en la consulta


// Imprime los elementos de la tabla
while ($fila = $resultado->fetch_assoc()) {
  echo "<tr>
<th scope='row'>". $fila['fincidencia'] . "</th>
<td>". $fila['hincidencia'] . "</td>
<td> ". $fila['fsolucion'] . " </td>
<td> ". $fila['hsolucion'] . " </td>
<td> ". $fila['duracion'] . " </td>
<td> ". $fila['afectacion'] . "</td>
<td>". $fila['ambiente'] . " </td>
<td>". $fila['servicio'] . "</td>
<td>
<div class='d-buttons'>
<form action='verincidencias.php' method='POST'>
  <input type='hidden' value='".$fila['id']."' id='id' name='id'>
<button class='btn-icons'> ".$eye." </button>
</form>
<form action='php/delete.php' method='POST'>
  <input type='hidden' value='".$fila['id']."' id='id' name='id'>
<button class='btn-icons-delete'> ".$delete."  </button>
</form>
</div>
</td>
  </tr>";
}






// Cierra la conexión a la base de datos
$conn->close();

?>