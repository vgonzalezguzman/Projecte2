<?php
// Este controlador sirve para ver la pagina de reserva.php

function ctrlReservaView($request,  $response,$container){
    
    $response->setTemplate("reserva.php");

    return $response;
}