<?php 
try {
    if (empty($_GET["lang"])) {
        return;
    } else {
        $bd = include "../src/config.php";
        echo "<script>console.log('lang selected 1');</script>";    
        $lang = $_GET["lang"];
        $sentencia = $bd->prepare("SELECT * FROM " . $lang[0]);
        $sentencia->execute();
        $langData = $sentencia->fetchObject();
        echo json_encode($langData);
    
        $titol_value = $langData->Titol;
        echo $titol_value;
    }
} catch (PDOException $e) {
    echo "Database Error: " . $e->getMessage();
}