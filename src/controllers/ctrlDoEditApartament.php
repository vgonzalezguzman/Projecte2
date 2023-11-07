<?php
// Este controlador transforma los datos del formulario a variables PHP y llama a la función para editar el apartamento.

function ctrlDoEditApartament($request, $response, $container) {
 
    $ID_Apartament = $request->get(INPUT_POST,"ID_Apartament");
    $titol = $request->get(INPUT_POST, "title");
    $postal = $request->get(INPUT_POST, "postal");
    $descripcion = $request->get(INPUT_POST, "descripcion");
    $metros = $request->get(INPUT_POST, "metros");
    $habitaciones = $request->get(INPUT_POST, "habitaciones");
    $TBaja = $request->get(INPUT_POST, "TBaja");
    $TALT = $request->get(INPUT_POST, "TALT");
    $cancelacion = $request->get(INPUT_POST, "cancelacion");
    $servicesSelected =$_POST["servicesSelected"];  //$request->get(INPUT_POST, "servicesSelected");//  c //

    // Llama a la función para editar el apartamento con los datos del formulario
    $apartamentModel = $container->apartaments();
    $serveisModelD = $container->Serveis_apartament();
    $serveisModelA = $container->Serveis_apartament();
    $img_apartamentModelD = $container->Img_apartament();
    $img_apartamentModelA = $container->Img_apartament();
    $userModel2 = $container->Apartaments();

    $apartamentModel->EditApartamentById($ID_Apartament, $titol, $postal, $descripcion, $metros, $habitaciones, $TBaja, $TALT, $cancelacion);
    $serveisModelD->delete_serveis($ID_Apartament);
    foreach($servicesSelected as $service){
        $serveisModelA->addApartamentosServicios($ID_Apartament,str_ireplace("servicesSelected",'',$service));   
      }

    $img_apartamentModelD->delete_img($ID_Apartament);

    $destinationFolder = '../public/img/';
$destinationimg = '../../img/';
$rutaImg = $destinationimg . $ID_Apartament . "/";
$rutaBase = $destinationFolder . $ID_Apartament . "/";
$rutaDelete = $destinationFolder . $ID_Apartament . "/";

$carpeta = glob($rutaDelete . '/*'); // Obtener todos los archivos del directorio
foreach ($carpeta as $archivos_carpeta) {
    if (is_dir($archivos_carpeta)) {
        rmdir($archivos_carpeta);
    } else {
        unlink($archivos_carpeta);
    }
    rmdir($rutaDelete); // Elimina la carpeta
}




   if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
       $images = $_FILES['images'];

       foreach ($images['name'] as $key => $image_name) {
           $rutaCompleta = $rutaImg . $image_name;
           //var_dump([$userModel2, $ID_Apartament, $image_name]);
           $userModel2 = $userModel2->addApartamentosImages($ID_Apartament, $rutaCompleta);
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
   

  


    $response->redirect("location: index.php?r=gestioapartament");

    return $response;
}
?>
