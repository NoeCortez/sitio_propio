<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesión</title>
</head>
<body>
    <a href="sesion.php">Iniciar Sesión</a> <!-- al hacer click se inicia sesion -->
    <a href="protegido.php">Contenido Protegido</a> <!-- iniciar sesion primero -->

    <h2>Bienvenido: <?php echo isset($_SESSION['admin']) ? $_SESSION['admin'] : 'INVITADO' ?></h2>
</body>
</html>