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


include "../src/model/serveis.php";
include "../src/model/serveis_apartament.php";
include "../src/model/Users.php";
include "../src/model/Apartament.php";
include "../src/model/disponibilitat.php";
include "../src/model/Img_apartament.php";
include "../src/model/reserva.php";
include "../src/model/temporada.php";
include "../src/model/Db.php";
