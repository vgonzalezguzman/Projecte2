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


include "../src/model/Users.php";
include "../src/model/Apartament.php";
include "../src/model/Db.php";
