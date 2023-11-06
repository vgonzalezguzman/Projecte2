<?php
// Este controlador sirve para ver la pagina de users.php

function ctrlUsersView($request,  $response,$container){
    $response->setTemplate("users.php");
    return $response;
}