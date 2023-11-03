<?php
// Este controlador transforma los datos del formulario a variables PHP y llama a la función register de Users.php

function ctrlDoDades($request, $response, $container) {

    $user = $request->get(INPUT_POST, "name");
    $lastname = $request->get(INPUT_POST, "lastname");
    $phone = $request->get(INPUT_POST, "phone");
    $mail = $request->get(INPUT_POST, "email");
    $pass = $request->get(INPUT_POST, "password");

    $userModel = $container->Users();
    
    $ID_Usuari = $_SESSION["user"]["ID_Usuari"];

    $userModel = $userModel->updateUser($ID_Usuari, $user, $lastname, $phone, $mail, $pass);

    $response->redirect("location: index.php?r=dades");


    return $response;
}
?>
