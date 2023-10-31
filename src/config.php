<?php

$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = 'root';
$config["db"]["pass"] = '';
$config["db"]["dbname"] = 'projecte2';
$config["db"]["host"] = 'localhost';


include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

include "../src/model/Db.php";
include "../src/model/Users.php";