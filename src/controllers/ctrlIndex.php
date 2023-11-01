<?php

function ctrlIndex($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);


    $apartamentModel = $container->apartaments();
    $apartamentData = $apartamentModel->getApartamentos();
    
    $response->set("apartaments",$apartamentData);

    $logged = $request->get("SESSION","logged");
    $response->set("logged",$logged);
    $response->setTemplate("index.php");

    return $response;
}