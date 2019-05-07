<?php

    $id = $_GET['id'];                              // Capturando variable
    $color = $_GET['color'];                        // Capturando valor
    $descripcion = $_GET['descripcion'];            // Capturando valor
    
    include_once 'setting/conexion.php';            // Llamando conexion

    $sql_editar = 'UPDATE colores SET color = ?, descripcion = ? WHERE id = ?'; // Sentencia
    $sentencia_editar = $pdo->prepare($sql_editar);                             // Preparando la sentencia
    $sentencia_editar->execute(array($color, $descripcion, $id));               // Ejecutando sentencia y paso de parametros

    // Cerramos conexion base de datos y tambien sentencia
    $sentencia_agregar = null;
    $pdo = null;
    
    header('location:index.php');                       // redirigir al index