<?php

include('connect.php');

$id = $_POST['id'];
$fincidencia = $_POST['fincidencia'];
$hincidencia = $_POST['hincidencia'];
$fsolucion = $_POST['fsolucion'];

$hsolucion = $_POST['hsolucion'];
$duracion = $_POST['duracion'];
$afectacion = $_POST['afectacion'];
$ambiente = $_POST['ambiente'];
$servicio = $_POST['servicio'];
$elementoafectado = $_POST['elementoafectado'];
$tipoafectacion = $_POST['tipoafectacion'];
$descripcion = $_POST['descripcion'];
$estatusalerta = $_POST['estatusalerta'];
$ticket = $_POST['ticket'];
$usuario = $_POST['usuario'];
$reporte = $_POST['reporte'];

$query = "UPDATE incidencias SET 
fincidencia = '$fincidencia',
hincidencia = '$hincidencia',
fsolucion = '$fsolucion',
hsolucion = '$hsolucion',
duracion = '$duracion',
afectacion = '$afectacion',
ambiente = '$ambiente',
servicio = '$servicio',
elementoafectado = '$elementoafectado',
tipoafectacion = '$tipoafectacion',
descripcion = '$descripcion',
estatusalerta = '$estatusalerta',
ticket = '$ticket',
usuario = '$usuario',
reporte = '$reporte'
 WHERE id = $id";

// Ejecuta la consulta en la base de datos
if ($conn->query($query) === TRUE) {
    header("Location:../bitacora.php");
} else {
  echo "Error al actualizar incidencia: ";
  echo "<a href='../bitacora.php'> Click aqui para regresar </a>";
}

?>