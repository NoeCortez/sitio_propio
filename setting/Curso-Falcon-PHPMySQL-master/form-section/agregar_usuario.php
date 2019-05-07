<?php

    /* Incluyendo archivo conexion.php */
    include_once'setting/conexion.php';

    /* echo password_hash("NoeCortez", PASSWORD_DEFAULT)."\n"; */ // ver contraseña hash

    /* CAPTURANDO DATOS DEL FORMULARIO 'Regístrate' */
    $usuario_nuevo = $_POST['nombreUsuario'];           // se captura el nombre de usuario
    $usuario_contra = $_POST['passUsuario'];            // se captura el password
    $usuario_contra2 = $_POST['passUsuario2'];          // se captura la comprobación de password

    /* VERIFICANDO SI USUARIO EXISTE */
    $sql_revisar = 'SELECT * FROM usuarios WHERE nombre_usuario = ?';       // sentencia SQL
    $sentencia_revisar = $pdo->prepare($sql_revisar);                       // conecta a la BD y prepara sentencia
    $sentencia_revisar->execute(array($usuario_nuevo));                      // ejecuta la sentencia pasando parametros
    $resultado = $sentencia_revisar->fetch();                               // almacena los valores en $resultado

    var_dump($resultado);           // mostramos valores de la variable $resultado
    if ($resultado) {
        echo '<br/> El USUARIO ingresado ya existe!';
        die();
    }

    /* ENCRIPTANDO CONTRASEÑA */
    $usuario_contra = password_hash($usuario_contra, PASSWORD_DEFAULT);

    /* IMPRESION DE LOS CONTENIDOS DE LAS VARIABLES */
    // echo '<pre>';
    //     var_dump($usuario_nuevo);
    //     var_dump($usuario_contra);
    //     var_dump($usuario_contra2);
    // echo '</pre>';

    /* VERIFICANDO QUE LAS DOS CONTRASEÑAS SEAN IGUALES */
    if (password_verify($usuario_contra2, $usuario_contra)) {
        echo '<br/>¡La contraseña es válida!';

        /* Agregando informacion a la base de datos */
        $sql_agregar = 'INSERT INTO usuarios (nombre_usuario, pass_usuario) VALUES (?, ?)';
        $sentencia_agregar = $pdo->prepare($sql_agregar);

        /* Comprobando que se haya ingresado el usuario a la base de datos */
        if ($sentencia_agregar->execute(array($usuario_nuevo, $usuario_contra))) {
            echo '<br/>Agregado Exitosamente!'.'<br/>';
        } else {
            echo '<br/>Error al agregar'.'<br/>';
        }

        /* Cerrando conexion base de datos y sentencia */
        $pdo = null;
        $sentencia_agregar = null;

        //header('location:registro.php');

    } else {
        echo '¡La contraseña no es válida';
    }