<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>

<?php
include('conexion.php');
?>

    <h1 id="nav-title">Navegación</h1>
    <div class="nav">
        <a href="index.php">Hacia Index.</a>
        <br>
        <a href="formulario.php">Hacia Formulario</a>
    </div>

    <div>
        <h2>Contacto</h2>
        <form action="store.php" method="POST">

            <label for="nombre">
                <input type="text" id="nombre" name="nombre"> Nombre 
            </label>
            <br>
            <br>
            <label for="correo">
                <input type="email" name="correo" id="correo"> email
            </label>
            <br>
            <br>
            <label for="contrasena">
                <input type="text" name="telefono" id="telefono"> telefono
            </label>
            <br>
            <br>
            <label for="ciudad">
                <select name="ciudad" id="ciudad">
                    <option value="guadalajara">Guadalajara</option>
                    <option value="zapopan">Zapopan</option>
                    <option value="tonala">Tonala</option>
                    <option value="tlaquepaque">Tlaquepaque</option>
                </select> Seleccione Una Ciudad
            </label>
            <br>
            <br>
            <label for="enviar">
                <input type="submit" value="Enviar">
            </label>

        </form>

    </div>
</body>
</html>