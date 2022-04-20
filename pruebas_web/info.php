<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos del usuario</title>
</head>
<body>

    <pre>
    <h2>Escribe tus datos</h2>
    <form action="cookie.php" method="post">
        <label for="nombre">Nombre: </label><br>
        <input id="nombre" type="text" name="usuario"><br>
        <label for="email">Correo:</label>
        <input id="email" type="email" name="correo"><br>
        <input type="submit" value="Enviar datos">
    </form>

</body>
</html>