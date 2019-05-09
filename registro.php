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
    
    <img src="img/IFCO_G_(Cinema).png" alt="logo_cinema" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Regístrate aquí</font>
        </font>
    </h1>
    <form class="needs-validation form-registering" action="registro-bd.php" method="POST" novalidate>
    
    <!-- NOMBRE DEL USUARIO -->
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombreReg"placeholder="Nombre" value="Mark" required>
        <div class="valid-feedback">
          ¡Se ve bien!
        </div>
      </div>

      <!-- APELLIDO DEL USUARIO -->
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Apellido</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellidoReg"placeholder="Apellido" value="Otto" required>
        <div class="valid-feedback">
          ¡Se ve bien!
        </div>
      </div>

      <!-- USUARIO -->
      <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">Usuario</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
          </div>
          <input type="text" class="form-control" id="validationCustomUsername" name="usuarioReg" placeholder="Username" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Por favor, elija un nombre de usuario.
          </div>
        </div>
      </div>
    </div>

    <!-- CORREO DEL USUARIO -->
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
        <div class="col-md-12">
          <input type="email" class="form-control form-control-lg" id="colFormLabelLg" name="emailReg" placeholder="Ingresa tu correo electronico">
        </div>
      </div>

      <!-- CONTRASEÑA UNO -->
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom03">Contraseña</label>
        <input type="text" class="form-control" id="validationCustom03" name="contraReg"placeholder="Contraseña" required>
        <div class="invalid-feedback">
          <!-- Please provide a valid city. -->
          Por favor, ingresa una contraseña
        </div>
      </div>
      
      <!-- CONTRASEÑA DOS -->
      <div class="col-md-6 mb-3">
        <label for="validationCustom04">Validando contraseña</label>
        <input type="text" class="form-control" id="validationCustom04" name="contra2Reg" placeholder="Ingresa nuevamente la contraseña" required>
        <div class="invalid-feedback">
          <!-- Por favor, proporcione un estado válido. -->
          Por favor, ingresa nuevamente la contraseña
        </div>
      </div>
      <!-- 
      <div class="col-md-3 mb-3">
        <label for="validationCustom05">Zip</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
        <div class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>
      -->
    </div>

    <!-- CHECKBOX -->
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Aceptar los términos y condiciones.
        </label>
        <div class="invalid-feedback">
          Usted debe estar de acuerdo antes de enviar.
        </div>
      </div>
    </div>
    <button class="btn btn-primary espacio-bajo" type="submit">Registrarse</button>
    <div><a href="login.php" class="enlace-block">Iniciar Sesión</a></div>
  </form>

  <script>
    // Ejemplo de JavaScript de inicio para deshabilitar el envío de formularios si hay campos no válidos
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        
        var forms = document.getElementsByClassName('needs-validation');
        // Pasa sobre ellos y evita la sumisión.
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>