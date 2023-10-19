<?php

function ctrlLogin($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("login.php");

    return $response;
    
}