<?php

    session_start();        // Inicializa la sesión
    $login = 'Noe';         // Variable de sesión con valor 'Noe'

    $_SESSION['admin'] = $login;        // Array de 'admin' con el valor de la variable de sesion

    if (isset($_SESSION['admin'])) {    // comprobamos con isset que exista la session iniciada
        header('location:index.php');   // de existir nos redirije al index.php
    }

    /* var_dump($_SESSION); */