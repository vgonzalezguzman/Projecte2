<?php
// Este controlador sirve para ver la pagina de register.php

function ctrlApartamentView($request,  $response,$container){
    $ServeisModel = $container->Serveis();
    $GetServeis = $ServeisModel->getServeis();
    $response->set("serv", $GetServeis);
    
    $response->setTemplate("apartament.php");
    return $response;
}