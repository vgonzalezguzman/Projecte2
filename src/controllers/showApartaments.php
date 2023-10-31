<?php
function showApartaments($request, $response, $container){
    $apartaments = $container->$apartaments()->getAll();
    $response->set("apartaments",$apartaments);
    return $response;
}   