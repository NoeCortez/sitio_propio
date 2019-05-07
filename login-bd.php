<?php

    session_start();

    include_once 'setting/conexion.php';

    $usuario_login = $_POST['usuarioLogin'];
    $pass_login = $_POST['pPass'];

    echo '<pre>';
        var_dump($usuario_login);
        var_dump($pass_login);
    echo '</pre>';

    /* VERIFICANDO SI USUARIO EXISTE */
    $sql_revisar = 'SELECT * FROM tabla1 WHERE usuario = ?';       // sentencia SQL
    $sentencia_revisar = $pdo->prepare($sql_revisar);                       // conecta a la BD y prepara sentencia
    $sentencia_revisar->execute(array($usuario_login));                      // ejecuta la sentencia pasando parametros
    $resultado = $sentencia_revisar->fetch();                               // almacena los valores en $resultado

    echo '<pre>';
        echo 'VALORES DE LA BASE';
        print_r($resultado);           // mostramos valores de la variable $resultado
    echo '</pre>';

    if(!$resultado) {
        // Matamos la operación
        echo 'No existe usuario';
        die();
    }

    /* mostramos valor de la contraseña almacenada en la BD */
    echo '<pre>';
        echo 'CONTRASEÑA DE LA BD';
        var_dump($resultado['clave']);       // mostramos la contraseña de la variable $resultado
    echo '</pre>';

    $imp = password_verify($pass_login, $resultado['clave']);
    if (!$imp) {
        echo 'Recibe cero <br>';
    } else {
        echo 'recibe 1 <br>';
    }

    if (password_verify($pass_login, $resultado['clave'])) {
        // Las contraseñas son iguales
        $_SESSION['usuarioAcceso'] = $usuario_login;
        header('location:index.php');
    } else {
        echo 'No son iguales las contraseñas <br>';
        print_r($pass_login);
        die();
    }