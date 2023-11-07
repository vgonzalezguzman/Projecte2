<?php
// Este controlador transforma los datos del formulario a variables PHP y llama a la función para editar el apartamento.

function ctrlDoDeleteApartament($request, $response, $container) {
 
    $ID_Apartament = $request->get(INPUT_POST,"ID_Apartament");
    $apartamentModel = $container->apartaments();
    $img_ApartamentModel = $container->Img_apartament();
    $serveis_ApartamentModel = $container->serveis_apartament();

    // Llama a la función para editar el apartamento con los datos del formulario
    $img_ApartamentModel->delete_img($ID_Apartament);
    $serveis_ApartamentModel->delete_serveis($ID_Apartament);
    $apartamentModel->delete($ID_Apartament);

    $response->redirect("location: index.php?r=gestioapartament");

    return $response;
}
?>
