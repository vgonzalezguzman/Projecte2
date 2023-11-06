<?php
// Este controlador sirve para ver la pagina de register.php

function ctrlApartamentView($request,  $response,$container){

    $logged = $request->get("SESSION","logged");
    $response->set("logged",$logged);
    $response->setTemplate("apartament.php");
    return $response;
}