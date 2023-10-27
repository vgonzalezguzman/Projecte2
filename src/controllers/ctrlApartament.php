<?php
// Este controlador sirve para ver la pagina de register.php

function ctrlApartamentView($request,  $response,$container){
    $response->setTemplate("apartament.php");
    return $response;
}