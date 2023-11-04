<?php
// Este controlador sirve para ver la pagina de gestioapartament.php

function ctrlGestioApartamentView($request,  $response,$container){
    $response->setTemplate("gestioapartament.php");
    return $response;
}