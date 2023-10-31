<?php
// Este controlador sirve para ver la pagina de dades.php

function ctrlDadesView($request,$response,$container){
    $response->setTemplate("dades.php");
    return $response;
}