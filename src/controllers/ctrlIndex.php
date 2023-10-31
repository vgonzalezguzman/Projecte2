<?php

function ctrlIndex($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $apartaments = $request->get(INPUT_GET, "apartaments");
    var_dump($apartaments);

    //$apartamentList = $images->all();

    $response->setTemplate("index.php");

    return $response;
}