<?php

function ctrlIndex($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);


    $apartament = $container->apartaments();
    $apartaments = $apartament->getApartamentos();

    $response->set("apartaments",$apartaments);

    $logged = $request->get("SESSION","logged");

    $response->set("logged",$logged);
    $response->setTemplate("index.php");

    
    return $response;
}