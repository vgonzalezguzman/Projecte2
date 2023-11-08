<?php
// Este controlador transforma los datos a variables php y llama a la función ctrlRegister
// de Users.php

function ctrlDoApartament($request, $response, $container){
    
    $title = $request->get(INPUT_POST, "title");
    $postal = $request->get(INPUT_POST, "postal");
    $descripcion = $request->get(INPUT_POST, "descripcion");
    $metros = $request->get(INPUT_POST, "metros");
    $habitaciones = $request->get(INPUT_POST, "habitaciones");
    $TBaja = $request->get(INPUT_POST, "TBaja");
    $TALT = $request->get(INPUT_POST, "TALT");
    $cancelacion = $request->get(INPUT_POST, "cancelacion");
    $direccion = $request->get(INPUT_POST, "direccion");
    $servicesSelected =$_POST["servicesSelected"];  //$request->get(INPUT_POST, "servicesSelected");//  c //
   
    $userModel = $container->Apartaments();
    $userModel2 = $container->Apartaments();
    $userModel3 = $container->Apartaments();
    $userModel4 = $container->Serveis_apartament();
  

    $ID_Usuari = $_SESSION["user"]["ID_Usuari"];

    $userModel = $userModel->addapartament( $title, $postal, $descripcion, $metros, $habitaciones, $TBaja, $TALT, $cancelacion, $ID_Usuari, $direccion);
    $lastApartamentId = $userModel3->getLastId($ID_Usuari);

    foreach($servicesSelected as $service){
       $userModel4->addApartamentosServicios($lastApartamentId,str_ireplace("servicesSelected",'',$service));   
     }

     $destinationFolder = '../public/img/';
     $destinationimg = '../../img/';
     $rutaImg = $destinationimg . $lastApartamentId . "/";
     $rutaBase = $destinationFolder . $lastApartamentId . "/";

    if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
        $images = $_FILES['images'];

        foreach ($images['name'] as $key => $image_name) {
            $rutaCompleta = $rutaImg . $image_name;
            //var_dump([$userModel2, $lastApartamentId, $image_name]);
            $userModel2 = $userModel2->addApartamentosImages($lastApartamentId, $rutaCompleta);
        }
        echo "Todas las imágenes se han subido correctamente.";
    } else {
        echo "No se han subido imágenes.";
    }

   

    if (mkdir($rutaBase, 0750, true)) {
        foreach ($_FILES["images"]["tmp_name"] as $key => $tmp_name) {
            //var_dump([$key]);
            $nombreArchivo = $_FILES["images"]["name"][$key];
            $ruta = $rutaBase . $nombreArchivo;
            move_uploaded_file($tmp_name, $ruta);
    }
}




      if ($userModel2) {
          $response->redirect("location: index.php");
      } else {
          $response->redirect("location: index.php");
      }
    return $response;

}
?>
