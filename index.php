<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>


    <h1>BASE DE DATOS</h1>
    <ul>
        <li> <a href="index.php">Inicio</a> </li>
        <li> <a href="formulario.php">Formulario</a></li>
    </ul>

    <?php

        include('conexion.php');
        $sql = "SELECT * FROM info";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach($stmt->fetchAll() as $row){
            echo "<li>" . $row['nombre'] . " " . $row ['email'] . " " .  $row['telefono'] . " " .  $row['ciudad'] . "</li>";
        }

    ?>
</body>
</html>