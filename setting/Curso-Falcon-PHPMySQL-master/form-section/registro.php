<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Formulario de Registro</title>
  </head>
  <body>
    <h1>Bienvenido al sitio!</h1>

    <!-- FORMULARIO BOOTSTRAP -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Regístrate</h2>
                <form action="agregar_usuario.php" method="POST">
                    <div class="form-group">
                        <!-- NOMBRE DEL USUARIO -->
                        <label for="nombreUsuario">USUARIO</label>
                        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" aria-describedby="usernameHelp" placeholder="Ingrese su usuario">
                        <small id="usernameHelp" class="form-text text-muted">Este usuario te permitirá entrar al sitio.</small>
                    </div>
                    <div class="form-group">
                        <!-- CONTRASEÑA -->
                        <label for="passwordUsuario">Contraseña</label>
                        <input type="text" class="form-control" id="passwordUsuario" name="passUsuario" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <!-- VERIFICACION DE CONTRASEÑA -->
                        <label for="passwordUsuario2">Vuelve a introducir la contraseña</label>
                        <input type="text" class="form-control" id="passwordUsuario2" name="passUsuario2" placeholder="Verificando Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Ingresa</h2>
                <form action="login.php" method="POST">
                    <!-- NOMBRE USUARIO -->
                    <div class="form-group">
                        <label for="nombreUsuario">USUARIO</label>
                        <input type="text" class="form-control" name="nombreUsuario" placeholder="Ingrese su usuario">
                    </div>
                    <div class="form-group">
                        <label for="passwordUsuario">CONTRASEÑA</label>
                        <input type="password" class="form-control" name="passUsuario" placeholder="Contrseña">
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>