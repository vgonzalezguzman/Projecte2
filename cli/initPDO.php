<?php

require "../src/config.php";

$db = $config["db"]["dbname"];
echo "Creant la base de dades : {$db} \n";
$dsn = "mysql:dbname={$config['db']['dbname']};host={$config['db']['host']}";

$usuari = $config["db"]["user"];
$clau = $config["db"]["pass"];
try {
    $sql = new PDO($dsn, $usuari, $clau);
} catch (\PDOException $e) {
    die('Ha fallat la connexió: ' . $e->getMessage());
}