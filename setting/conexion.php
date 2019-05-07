<?php

            #BASE MYSQL #LOCALHOST  #BD A CONECTAR
$link = 'mysql:host=localhost;dbname=prueba1';
$usuario = 'noecortez';
$pass = 'NoeCortez';

try {
    
    /* VARIALBE QUE ESTABLECE CONEXION CON LA BASE */
    $pdo = new PDO($link, $usuario, $pass);

    /* PRUEBA CONEXION */
    #echo 'Conectado' . "<br/>"; 

   /*
      #LISTAR CAMPOS Y REGISTROS DE LA TABLA COLORES 
    foreach($pdo->query('SELECT * FROM `colores`') as $fila) {
        print_r($fila);
    } 
    */

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
