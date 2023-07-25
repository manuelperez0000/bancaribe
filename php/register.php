<?php
// Conexión a la base de datos
require("connect.php");

// Obtener los datos del formulario de registro
$username = $_POST['username'];
$password = $_POST['password'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];

$sql = "INSERT into usuarios (username,password,nombre,apellido,correo) values ('$username','$password','$nombre','$apellido','$correo')";

$result = $conn->query($sql);

header("Location:../bitacora.php");

$conn->close();

?>