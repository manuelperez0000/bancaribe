<?php
// Conexión a la base de datos
require("connect.php");

// Obtener los datos del formulario de inicio de sesión
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar si el usuario y la contraseña son válidos
$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si son válidos, redirigir al usuario a la página de inicio
    header("Location:../bitacora.php");
} else {
    // Si no son válidos, mostrar un mensaje de error
    echo "Usuario o contraseña incorrectos";
}

$conn->close();
?>
