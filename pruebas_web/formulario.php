<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi sitio web</title>
</head>
<body>
    <pre>
    <h1>Formularios</h1>

    <form action="procesar.php" method="post">

        <label for="nombre">
            Nombre:
        </label>
        <input id="nombre" type="text" name="nombre"><br>
        <label for="email">
            Correo electronico:
        </label>
        <input id="email" type="email" name="correo"><br>
        <input type="submit" value="Enviar datos">
    </form>
    
</body>
</html>