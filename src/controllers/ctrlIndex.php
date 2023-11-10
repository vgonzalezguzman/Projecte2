<?php

function ctrlIndex($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);


    $apartamentModel = $container->apartaments();
    $imageModel = $container->images();

    $apartamentData = $apartamentModel->getApartamentosImages();
    $imageRandom = $imageModel->getImatgesRandom();
    
    $response->set("apartaments",$apartamentData);
    $response->set("imageRandom",$imageRandom);


    $logged = $request->get("SESSION","logged");
    $tipo="";
    $response->set("tipo",$tipo);

    $response->set("logged",$logged);
    $response->set("user",$logged);
    $response->setTemplate("index.php");

    
    return $response;
}