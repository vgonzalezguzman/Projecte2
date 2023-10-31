<?php
// Este controlador transforma los datos a variables php y llama a la función ctrlRegister
// de Users.php

function ctrlDoApartament($request, $response, $container){

    $title = $request->get(INPUT_POST, "title");
    $postal = $request->get(INPUT_POST, "postal");
    $descripcion = $request->get(INPUT_POST, "descripcion");
    $metros = $request->get(INPUT_POST, "metros");
    $habitaciones = $request->get(INPUT_POST, "habitaciones");
    $TBaja = $request->get(INPUT_POST, "TBaja");
    $TALT = $request->get(INPUT_POST, "TALT");
    $cancelacion = $request->get(INPUT_POST, "cancelacion");

    $userModel = $container->Apartaments();

    $ID_Usuari = $_SESSION["user"]["ID_Usuari"];

    $userModel = $userModel->addapartament($title, $postal, $descripcion, $metros, $habitaciones, $TBaja, $TALT, $cancelacion, $ID_Usuari);
    if ($userModel) {        
        $response->redirect("location: index.php");
    } else {
        $response->redirect("location: index.php");
    }

    return $response;
}
?>
