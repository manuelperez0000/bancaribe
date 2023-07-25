<?php
// Conexión a la base de datos
require("connect.php");

// Obtener los datos del formulario de registro de incidencia

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

$sql = "INSERT into incidencias (
    fincidencia,
    hincidencia,
    fsolucion,
    hsolucion,
    duracion,
    afectacion,
    ambiente,
    servicio,
    elementoafectado,
    tipoafectacion,
    descripcion,
    estatusalerta,
    ticket,
    usuario,
    reporte) values (
    '$fincidencia',
    '$hincidencia',
    '$fsolucion',
    '$hsolucion',
    '$duracion',
    '$afectacion',
    '$ambiente',
    '$servicio',
    '$elementoafectado',
    '$tipoafectacion',
    '$descripcion',
    '$estatusalerta',
    '$ticket',
    '$usuario',
    '$reporte')";

$result = $conn->query($sql);

header("Location:../bitacora.php");

$conn->close();

?>