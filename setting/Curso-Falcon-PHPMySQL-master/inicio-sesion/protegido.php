<?php
/* Habiendo iniciado sesión antes, session_start() tendrá los parámetros para entrar aquí */
session_start();    // trae la información de la variable de sesion

if (isset($_SESSION['admin'])) {                // Preguntamos si la sesion fue iniciada
    echo 'Bienvenido! ' . $_SESSION['admin'];   // de ser así imprimimos el valor de $_SESSION['admin']
    echo '<br/>' . '<a href="cerrar.php">Cerrar Sesión</a>';    // enlace para cerrar sesion
} else {                            // caso contrario, si no hay sesion iniciada redirije a index.php
    header('location:index.php');   // redireccionar al index.php
}