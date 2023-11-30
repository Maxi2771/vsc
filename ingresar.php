<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
</head>
    <body>
        <header>
            <a class="botones" href="index.php">Inicio</a>
            <a class="botones" href="sobre_mi.php">Sobre mi</a>
            <a class="botones" href="ingresar.php">Ingresar</a>
            <input type="checkbox" id="switch">
            <label for="switch" class="switch-label"></label>
        </header>

        <form action="" method="post">
            <input type="text"      placeholder="Nombre" autocomplete="off" required>
            <input type="text"      placeholder="Apellido" autocomplete="off" required>
            <input type="email"     placeholder="Correo Electronico" autocomplete="off" required>
            <input type="text"      placeholder="Usuario" autocomplete="off" required>
            <input type="password"  placeholder="Contraseña " autocomplete="off" required>
        </form>

        <form action="" method="post">
            <input type="text"      placeholder="Usuario" autocomplete="off" required>
            <input type="password"  placeholder="Contraseña" autocomplete="off" required>
        </form>
    </body>
</html>