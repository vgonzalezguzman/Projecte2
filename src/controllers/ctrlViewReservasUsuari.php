<?php
// Este controlador sirve para ver la pagina de reserva.php

function ctrlViewReservasUsuari($request,  $response,$container){    

    $userModel = $container->users();

    $userdata = $userModel->getAll($_SESSION["user"]["ID_Usuari"]);  

    $userID = $userdata["ID_Usuari"];

    $reservaModel = $container->reservas();

    $reservaUsuariData = $reservaModel->getReservasUsuari($userID);

    $response->set("apartaments",$reservaUsuariData);

    $tipo="viewUsuari";
    $response->set("tipo",$tipo);

    $response->setTemplate("reservesUsuaris.php");

    return $response;
}