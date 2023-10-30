<?php

/** 
 * Fitxer de configuració de l'aplicació.
 * */ 

 $config = [
    "db" => [
        "user" => "root",
        "pass" => "",
        "db" => "projecte_2",
        "host" => "localhost"
    ],
];

try {
    $db = new PDO(
        'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['db'] . ';charset=utf8',
        $config['db']['user'],
        $config['db']['pass']
    );    // OJO CON EL PUERTO!! POR DEFAULT ES 3360
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

include "../src/model/Users.php";


return $db;