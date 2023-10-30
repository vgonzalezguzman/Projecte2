<?php

$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = 'root';
$config["db"]["pass"] = '';
$config["db"]["dbname"] = 'projecte_2';
$config["db"]["host"] = 'localhost';

require_once "../src/Emeset/Request.php";
require_once "../src/Emeset/Response.php";
require_once "../src/Emeset/Container.php";


require_once "../src/model/DbPDO.php";
require_once "../src/model/modelApartament.php";