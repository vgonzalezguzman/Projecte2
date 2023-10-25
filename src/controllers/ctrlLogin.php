<?php
// Este controlador sirve para ver la pagina de register.php

function ctrlLoginView($request,  $response,$container){
    $response->setTemplate("login.php");
    return $response;
}