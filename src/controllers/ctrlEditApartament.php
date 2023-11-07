<?php

function ctrlEditApartamentView($request, $response, $container){
    $ID_Apartament = $request->get(INPUT_POST, "ID_Apartament");
    
    $apartamentModel = $container->apartaments();
    $ServeisModel = $container->Serveis();

    $apartamentModel = $apartamentModel->selectApartamentByID($ID_Apartament);
    $GetServeis = $ServeisModel->getServeis();

    $response->set("apartament",$apartamentModel);
    $response->set("serv", $GetServeis);
    
    $logged = $request->get("SESSION","logged");
    $response->set("logged",$logged);

    $response->setTemplate("editapartament.php");

    return $response;
}
?>
