<?php

function ctrlEditApartamentView($request, $response, $container){
    $ID_Apartament = $request->get(INPUT_POST, "ID_Apartament");
    
    $apartamentModel = $container->apartaments();

    $apartamentModel = $apartamentModel->selectApartamentByID($ID_Apartament);

    $response->set("apartament",$apartamentModel);

    $logged = $request->get("SESSION","logged");
    $response->set("logged",$logged);

    $response->setTemplate("editapartament.php");

    return $response;
}
?>
