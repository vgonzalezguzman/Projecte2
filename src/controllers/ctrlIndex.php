<?php

function ctrlIndex($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);


    $apartamentModel = $container->apartaments();
    $apartamentData = $apartamentModel->getApartamentosImages();
    $apartamentRandom = $apartamentModel->getApartamentosRandom();
    
    $response->set("apartaments",$apartamentData);
    $response->set("apartamentRandom",$apartamentRandom);


    $logged = $request->get("SESSION","logged");
    $response->set("logged",$logged);
    $response->set("user",$logged);
    $response->setTemplate("index.php");

    
    return $response;
}