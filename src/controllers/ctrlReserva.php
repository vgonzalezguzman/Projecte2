<?php

function ctrlReserva($request, $response, $container){
    $response->setTemplate("reserva.php");
    return $response;
}