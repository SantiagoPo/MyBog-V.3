<?php

$conexion = mysqli_connect("localhost", "root", "admin", "mybog");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$email = $_POST['Email'];
$password = $_POST['Password'];

$sql = "SELECT * FROM cuentas WHERE Email = '$email' AND Password = '$password'";

$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) == 1) {
    // Inicio de sesión exitoso, redireccionar al usuario a la página deseada
    echo "<script>alert('Inicio de sesión exitoso.'); window.location.href = '../calendario.html';</script>";
} else {
    // Credenciales incorrectas, mostrar mensaje de error
    echo "<script>alert('Credenciales incorrectas. Inténtalo de nuevo.'); window.location.href = './main.html';</script>";
}

mysqli_close($conexion);
?>
