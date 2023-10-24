<?php 
try {
    if (empty($_GET["lang"])) {         // NO ES NECESARIO, PERO OBLIGA A QUE AL MENOS PASES UN PARAMETRO LLAMADO LANG
        $lang = ["apartament"];  
    } else {
        $lang = $_GET["lang"];
    }
    $bd = include "../src/config.php";
    echo "<script>console.log('lang selected 1');</script>";  
    $sentencia = $bd->prepare("SELECT * FROM " . $lang[0]);
    $sentencia->execute();
    $langData = $sentencia->fetchObject();
    
    header('Content-Type: application/json');
    echo json_encode($langData);
    
} catch (PDOException $e) {
    echo "Database Error: " . $e->getMessage();
}