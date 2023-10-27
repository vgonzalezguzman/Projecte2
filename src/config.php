<?php

$contraseña = "";      // PON AQUI TU CONTRASENA. SI NO TIENES, PON ""
$usuario = "root";          // PON AQUI TU USUARIO (SUELE SER ROOT)
$nombre_base_de_datos = "projecte_2";  // EL NOMBRE DE TU BASE DE DATOS
try {
    //return mysqli_connect('localhost','root','admin','ice');
    return new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos . ';charset=utf8', $usuario, $contraseña);    // OJO CON EL PUERTO!! POR DEFAULT ES 3360
} catch (Exception $e) {
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}