<?php

    /* Incluyendo archivo conexion.php */
    include_once'setting/conexion.php';

    /* echo password_hash("NoeCortez", PASSWORD_DEFAULT)."\n"; */ // ver contraseña hash

    /* CAPTURANDO DATOS DEL FORMULARIO 'Regístrate' */
    $name_usuario_nuevo = $_POST['nombreReg'];           // se captura el nombre de usuario
    $last_usuario_nuevo = $_POST['apellidoReg'];
    $name_complete_user = $name_usuario_nuevo . " " . $last_usuario_nuevo;
    $usuario_nuevo = $_POST['usuarioReg'];
    $email_usuario_nuevo = $_POST['emailReg'];
    $usuario_contra_nueva = $_POST['contraReg'];            // se captura el password
    $usuario_contra_nueva2 = $_POST['contra2Reg'];          // se captura la comprobación de password

    /* VERIFICANDO SI USUARIO EXISTE */
    $sql_revisar = 'SELECT * FROM tabla1 WHERE usuario = ?';       // sentencia SQL
    $sentencia_revisar = $pdo->prepare($sql_revisar);                       // conecta a la BD y prepara sentencia
    $sentencia_revisar->execute(array($usuario_nuevo));                      // ejecuta la sentencia pasando parametros
    $resultado = $sentencia_revisar->fetch();                               // almacena los valores en $resultado

    var_dump($resultado);           // mostramos valores de la variable $resultado
    if ($resultado) {
        echo '<br/> El USUARIO ingresado ya existe!';
        die();
    }

    /* ENCRIPTANDO CONTRASEÑA */
    $usuario_contra_nueva = password_hash($usuario_contra_nueva, PASSWORD_DEFAULT);

    /* IMPRESION DE LOS CONTENIDOS DE LAS VARIABLES */
    echo '<pre>';
        var_dump($name_complete_user);
        var_dump($email_usuario_nuevo);
        var_dump($usuario_nuevo);
        var_dump($usuario_contra_nueva);
        var_dump($usuario_contra_nueva2);
    echo '</pre>';

    /* VERIFICANDO QUE LAS DOS CONTRASEÑAS SEAN IGUALES */
    if (password_verify($usuario_contra_nueva2, $usuario_contra_nueva)) {
        echo '<br/>¡La contraseña es válida!';

        /* Agregando informacion a la base de datos */
        $sql_agregar = 'INSERT INTO tabla1 (nombre, correo, clave, usuario) VALUES (?, ?, ?, ?)';
        $sentencia_agregar = $pdo->prepare($sql_agregar);

        echo $name_complete_user;
        
        /* Comprobando que se haya ingresado el usuario a la base de datos */
        if ($sentencia_agregar->execute(array($name_complete_user, $email_usuario_nuevo, $usuario_contra_nueva, $usuario_nuevo))) {
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