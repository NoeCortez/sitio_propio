<?php
    session_start();

    if (isset($_SESSION['admin'])) {                // Preguntamos si la sesion fue iniciada
        echo 'Bienvenido! ' . $_SESSION['admin'];   // de ser así imprimimos el valor de $_SESSION['admin']
        echo '<br/>' . '<a href="cerrar.php">Cerrar Sesión</a>';    // enlace para cerrar sesion
    } else {                            // caso contrario, si no hay sesion iniciada redirije a index.php
        header('location:registro.php');   // redireccionar al index.php
    }