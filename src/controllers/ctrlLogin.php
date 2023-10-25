<?php
<<<<<<< HEAD
// Este controlador sirve para ver la pagina de register.php

function ctrlLoginView($request,  $response,$container){
    $response->setTemplate("login.php");
    return $response;
=======

function ctrlLogin($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("login.php");

    return $response;
    
>>>>>>> emma
}