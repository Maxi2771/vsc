<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/ingresar.css">
    <title>Ingresar</title>
</head>
    <body class="color1">
        <header class="color2">
            <a class="botones" href="index.php">Inicio</a>
            <a class="botones" href="sobre_mi.php">Sobre mi</a>
            <a class="botones activado" href="ingresar.php">Ingresar</a>
            <input type="checkbox" id="switch">
            <label for="switch" class="switch-label"></label>
        </header>

        <form action="" method="post" class="register">
            <h1>Register</h1>
            <input type="text"      placeholder="Nombre" autocomplete="off" required>
            <input type="text"      placeholder="Apellido" autocomplete="off" required>
            <input type="email"     placeholder="Correo Electronico" autocomplete="off" required>
            <input type="text"      placeholder="Usuario" autocomplete="off" required>
            <input type="password"  placeholder="Contraseña " autocomplete="off" required>
            <input type="button" value="Registrarse">
            <h4 class="texto1" onclick="mostrarlogin()">Login</h4>
        </form>

        <form action="" method="post" class="login">
            <h1>Login</h1>
            <input type="text"      placeholder="Usuario" autocomplete="off" required>
            <input type="password"  placeholder="Contraseña" autocomplete="off" required>
            <input type="button" value="Iniciar">
            <h4 class="texto2" onclick="mostrar_register()">Register</h4>
        </form>
    </body>
</html>

<script src="js/color.js"></script>
<script>
    var inicio = false;
    var sobre_mi = false;
    var ingresar = true;
</script>
<script src="js/darkmode.js"></script>