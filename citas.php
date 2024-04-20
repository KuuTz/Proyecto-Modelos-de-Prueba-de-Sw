<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $fecha = $_POST["fecha"];
    $mensaje = $_POST["mensaje"];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO citas (nombre, email, telefono, fecha_cita, mensaje) VALUES ('$nombre', '$email', '$telefono', '$fecha', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Cita programada con éxito.";
    } else {
        echo "Error al programar la cita: " . $conn->error;
    }
}

$conn->close();
?>