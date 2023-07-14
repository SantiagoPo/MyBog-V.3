<?php

$conexion = mysqli_connect("localhost", "root", "", "mybog");


if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$email = $_POST['Email'];
$password = $_POST['Password'];

$sql = "INSERT INTO cuentas (Nombres, Apellidos, Email, Password, Id_servicios) VALUES ('$nombre', '$apellido', '$email', '$password', '1')";

if (mysqli_query($conexion, $sql)) {
    echo "<script>alert('Registro exitoso. Serás redireccionado.'); window.location.href = '../main.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
