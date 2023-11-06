<?php
// Este controlador transforma los datos del formulario a variables PHP y llama a la función para editar el apartamento.

function ctrlDoDeleteApartament($request, $response, $container) {
 
    $ID_Apartament = $request->get(INPUT_POST,"ID_Apartament");
    $apartamentModel = $container->apartaments();

    // Llama a la función para editar el apartamento con los datos del formulario
    $apartamentModel->delete($ID_Apartament);

    $response->redirect("location: index.php?r=gestioapartament");

    return $response;
}
?>
