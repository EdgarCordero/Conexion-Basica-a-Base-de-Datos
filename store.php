<?php
include('conexion.php');
if(count($_POST)>0){
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];

    $sql = "INSERT INTO info (nombre, email, telefono, ciudad) VALUES ('$nombre', '$email', '$telefono', '$ciudad')";

    $conn->exec($sql);
}

header('Location: index.php');

?>