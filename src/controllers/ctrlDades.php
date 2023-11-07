<?php
// Este controlador sirve para ver la pagina de dades.php
function ctrlDadesView($request,$response,$container)
{
    $userModel = $container->users();

    $userdata = $userModel->getAll($_SESSION["user"]["ID_Usuari"]);     // Userdata tiene la info del usuario

    $response->set("dades", $userdata);     // creamos dades y guardamos la info en esa variable

    $logged = $request->get("SESSION","logged");
    $response->set("logged",$logged);
    $response->setTemplate("dades.php");

    
    return $response;
}