<?php
// Este controlador sirve para ver la pagina de gestioapartament.php

function ctrlGestioApartamentView($request,  $response,$container){

    $apartamentModel = $container->apartaments();

    $ID_Usuari = $_SESSION["user"]["ID_Usuari"];

    // Mostrar apartamentos por id
    $apartamentModel = $apartamentModel->getApartamentosByID($ID_Usuari);
    $response->set("apartaments",$apartamentModel);

    $response->setTemplate("gestioapartament.php");
    return $response;
}