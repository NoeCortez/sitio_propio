<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Mis Estilos -->
    <link rel="stylesheet" href="css/estilos.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Icon -->
    <link rel="shortcut icon" href="img/icons/cine.png" />

    <title>Cine G | Bienvenido</title>
  </head>
  <body class="text-center">
    
    <form class="form-signin" action="login-bd.php" method="post">
        <img src="img/IFCO_G_(Cinema).png" alt="logo_cinema" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Bienvenido, inicia sesión</font>
            </font>
        </h1>
        <label for="inputEmail" class="sr-only">
            <!--<font style="vertical-align: inherit;">
                <input type="text" name="usuarioLogin" style="vertical-align: inherit;">Ingrese su usuario>
            </font> -->
        </label>
        <input type="text" name="usuarioLogin" id="inputText" class="form-control" placeholder="Ingrese su usuario" required autofocus>
        <label for="inputPassword" class="sr-only">
            <font style="vertical-align: inherit;">
                <input type="password" name="contraLogin" style="vertical-align: inherit;">Ingrese su contraseña>
            </font>
        </label>
        <input type="password" name="pPass" id="inputPassword" class="form-control" placeholder="Ingrese su contraseña" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="cbRecuerdame" value="Recuérdame">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Recuérdame</font>
                </font>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block espacio-bajo" type="submit">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Iniciar Sesión</font>
            </font>
        </button>
        <a href="registro.php">Regístrate aquí</a>
        <p class="mt-5 mb-3 text-muted">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">® CORTEZ</font>
            </font>
        </p>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>