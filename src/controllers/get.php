<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
if (empty($_GET["lang"])) {         // NO ES NECESARIO, PERO OBLIGA A QUE AL MENOS PASES UN PARAMETRO LLAMADO LANG
    exit("No hay id de lang");
}
$lang = $_GET["lang"];      
$bd = include_once "config.php";
$sentencia = $bd->prepare("select * from ".$lang);   //SELECT: OJO! NO ES LO MISMO ".$lang." que {$lang}. UNA CUESTION DE COMILLAS
$sentencia->execute([]);    // EJECUTAMOS LA QUERY CON EL PARAMETRO sel. Mira arriba. Pasamos dos parametros, verdad? Ahora pasamos un tercero, que se situa dentro del interrogante ?. Lo hacemos por una cuestion de comillas. El interrogante anade comillas "" a puta, en la query aparecera como "puta" y no como puta 
$lang = $sentencia->fetchObject();  // Recojemos el objeto que nos pasa la BD
echo json_encode($lang);    // La codificamos en JSON. No es obligatorio, pero es ser mas profesional. Tal vez quieras hacerlo en xml, pe