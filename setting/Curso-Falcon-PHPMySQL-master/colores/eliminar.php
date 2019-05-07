<?php

    include_once 'conexion.php';

    $id = $_GET['id'];

    $sql_eliminar = 'DELETE FROM colores WHERE id = ?';
    $sentencia_eliminar = $pdo->prepare($sql_eliminar);
    $sentencia_eliminar->execute(array($id));

    // Cerramos conexion base de datos y tambien sentencia
    $sentencia_agregar = null;
    $pdo = null;
    
    header('location:index.php');