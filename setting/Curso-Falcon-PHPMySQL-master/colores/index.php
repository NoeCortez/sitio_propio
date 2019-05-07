<?php
    include_once 'setting/conexion.php';

    /* LEER DATOS DE LA BASE DE DATOS */
    $sql_leer = 'SELECT * FROM `colores`';
    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();

    $resultado = $gsent->fetchAll();

    //var_dump($resultado);         // imprime los registros de la bd

    /* AGREGAR DATOS A LA BASE DE DATOS */
    if($_POST){
        $color = $_POST['color'];
        $descripcion = $_POST['descripcion'];

        /* mandar los datos a la base */
        $sql_agregar = 'INSERT INTO colores (color, descripcion) VALUES (?,?)';   // SENTENCIA
        $sentencia_agregar = $pdo->prepare($sql_agregar);                       // preparar sentencia
        $sentencia_agregar->execute(array($color, $descripcion));               // ejecutar sentencia y pasar variables

        // Cerramos conexion base de datos y tambien sentencia
        $sentencia_agregar = null;
        $pdo = null;
        
        header('location:index.php');                       // redirigir al index

    }

    if($_GET) {
        $id = $_GET['id'];

        /* LEER DATOS DE LA BASE DE DATOS */
        $sql_unico = 'SELECT * FROM `colores` WHERE id = ?';         // traer un unico elemento
        $gsent_unico = $pdo->prepare($sql_unico);
        $gsent_unico->execute(array($id));

        $resultado_unico = $gsent_unico->fetch();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Iconos Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div class="container mt-5">
        <div class="row">
            
            <!-- MOSTRANDO FILAS CON CONTENIDO DE LA BD -->
            <div class="col-md-6">

                <?php foreach($resultado as $dato): ?>

                <!-- MUESTRA LOS COLORES Y LA DESCRIPCION -->
                <div class="alert alert-<?php echo $dato['color'] ?> text-uppercase" role="alert">
                    <?php echo $dato['color'] ?>
                    -
                    <?php echo $dato['descripcion'] ?>

                    <a href="eliminar.php?id=<?php echo $dato['id'] ?>" class="float-right ml-3">
                        <i class="fas fa-trash-alt"></i>
                    </a>

                    <a href="index.php?id=<?php echo $dato['id'] ?>" class="float-right">
                        <i class="fas fa-pen"></i>
                    </a>
                </div>

                <?php endforeach ?>

            </div>

            <div class="col-md-6">
                <?php if(!$_GET): ?>
                <h1>AGREGAR ELEMENTOS</h1>
                <form method="POST">
                    <input type="text" class="form-control" name="color">
                    <input type="text" class="form-control mt-3" name="descripcion">
                    <button class="btn btn-primary mt-3">Agregar</button>
                </form>
                <?php endif ?>

                <?php if($_GET): ?>
                <h1>EDITAR ELEMENTOS</h1>
                <form action="editar.php" method="GET">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $resultado_unico['id'] ?>">
                    <input type="text" class="form-control" name="color" value="<?php echo $resultado_unico['color'] ?>">
                    <input type="text" class="form-control mt-3" name="descripcion" value="<?php echo $resultado_unico['descripcion'] ?>">
                    <button class="btn btn-primary mt-3">Agregar</button>
                </form>
                <?php endif ?>
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

<?php
    // cerramos conexión base de datos y sentencia
    $pdo = null;
    $gsent = null;
?>