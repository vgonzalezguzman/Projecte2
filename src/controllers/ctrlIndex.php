<?php

function ctrlIndex($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);


    $apartament = $container->apartaments();
    $apartaments = $apartament->getApartamentos();
    //die(var_dump($apartament));
    $response->set("apartaments",$apartaments);
    //$error = $request->get("SESSION","error");
    //$response->set("error",$error);
    $logged = $request->get("SESSION","logged");
    $response->set("logged",$logged);
    $response->setTemplate("index.php");

    return $response;
}