<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
$lang = "apartament";
$bd = include_once "../src/config.php";

if ($bd) {
    $sentencia = $bd->prepare("SELECT * FROM {$lang}");
    $sentencia->execute();

    $result = $sentencia->fetchObject();

    if ($result) {
        echo json_encode($result);
    } else {
        echo json_encode(["error" => "No data found"]);
    }
} else {
    echo json_encode(["error" => "Database connection failed"]);
}
?>
