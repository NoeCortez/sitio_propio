<?php

    session_start();

    include_once 'setting/conexion.php';

    $usuario_login = $_POST['nombreUsuario'];
    $pass_login = $_POST['passUsuario'];

    echo '<pre>';
        var_dump($usuario_login);
        var_dump($pass_login);
    echo '</pre>';

    /* VERIFICANDO SI USUARIO EXISTE */
    $sql_revisar = 'SELECT * FROM usuarios WHERE nombre_usuario = ?';       // sentencia SQL
    $sentencia_revisar = $pdo->prepare($sql_revisar);                       // conecta a la BD y prepara sentencia
    $sentencia_revisar->execute(array($usuario_login));                      // ejecuta la sentencia pasando parametros
    $resultado = $sentencia_revisar->fetch();                               // almacena los valores en $resultado

    echo '<pre>';
        var_dump($resultado);           // mostramos valores de la variable $resultado
    echo '</pre>';

    if(!$resultado) {
        // Matamos la operación
        echo 'No existe usuario';
        die();
    }

    /* mostramos valor de la contraseña almacenada en la BD */
    echo '<pre>';
        var_dump($resultado['pass_usuario']);       // mostramos la contraseña de la variable $resultado
    echo '</pre>';
    if (password_verify($pass_login, $resultado['pass_usuario'])) {
        // Las contraseñas son iguales
        $_SESSION['admin'] = $usuario_login;
        header('location:restringido.php');
    } else {
        echo 'No son iguales las contraseñas';
        die();
    }