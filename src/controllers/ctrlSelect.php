<?php 
try {   
    echo "<script>console.log('carrega');</script>"; 
    if (empty($_GET["lang"])) {
        return;
    } else {
        echo "<script>console.log('lang selected 1');</script>"; 
        $bd = include "../src/config.php";
        $lang = $_GET["lang"];
        $sentencia = $bd->prepare("SELECT * FROM " . $lang[0]);
        $sentencia->execute();
        $langData = $sentencia->fetchObject();
        echo json_encode($langData);
    }
} catch (PDOException $e) {
    echo "<script>console.log('error');</script>"; 
    echo "Database Error: " . $e->getMessage();
}