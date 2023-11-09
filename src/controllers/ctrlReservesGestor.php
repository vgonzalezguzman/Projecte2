<?php
// Este controlador sirve para ver la pagina de reserva.php
function ctrlReservesGestor($request,  $response,$container){    

    $logged = $request->get("SESSION","logged");
    
    $response->set("logged",$logged);
    

    $userModel = $container->users();

    $userdata = $userModel->getAll($_SESSION["user"]["ID_Usuari"]);  

    $arrendatari = $userModel->getUsuariQueReserva();
    $response->set("arrendatari",$arrendatari);

    $userID = $userdata["ID_Usuari"];


    $apartamentModel = $container->apartaments();
    
    $reservasGestor = $apartamentModel->getReservasGestor($userID);
    
    $response->set("reservesGestor",$reservasGestor);

    $nomApartamentsReservats = $apartamentModel->getNameApartamentosReservados();

    $response->set("nomApartament",$nomApartamentsReservats);


    $response->setTemplate("viewReservaGestor.php");

    return $response;
}