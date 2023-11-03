<?php
// Este controlador transforma los datos a variables php y llama a la funciones
// de Apartament.php

function ctrlDoApartament($request, $response, $container){

    $title = $request->get(INPUT_POST, "title");
    $postal = $request->get(INPUT_POST, "postal");
    $descripcion = $request->get(INPUT_POST, "descripcion");
    $metros = $request->get(INPUT_POST, "metros");
    $habitaciones = $request->get(INPUT_POST, "habitaciones");
    $TBaja = $request->get(INPUT_POST, "TBaja");
    $TALT = $request->get(INPUT_POST, "TALT");
    $cancelacion = $request->get(INPUT_POST, "cancelacion");
    $imagenes = $_FILES['imagenes'];


    $apartamentModel = $container->Apartaments();

    $ID_Usuari = $_SESSION["user"]["ID_Usuari"];

    $apartamentModel = $apartamentModel->addapartament($title, $postal, $descripcion, $metros, $habitaciones, $TBaja, $TALT, $cancelacion, $ID_Usuari);
   
    $lastAppartmentID = $apartamentModel->getLastAppIDByUser($ID_Usuari);
    
    $Carpeta = 'IMG_Apartament/' . $lastAppartmentID . '/';

        // Crear la carpeta si no existe
    if (!file_exists($Carpeta)) {
        mkdir($Carpeta, 0777, true); // Cambia los permisos según sea necesario
    }

    // Guardar las imágenes en la carpeta
    foreach ($imagenes['tmp_name'] as $key => $tmp_name) {
        $imagen = $imagenes['name'][$key];
        $destino = $Carpeta . $imagen;
        move_uploaded_file($tmp_name, $destino);
    }

    
    $response->redirect("location: index.php");
    

    return $response;
}
?>
