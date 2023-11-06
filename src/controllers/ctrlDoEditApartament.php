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

    // Llama a la función para editar el apartamento con los datos del formulario
    $apartamentModel = $container->apartaments();

    $apartamentModel->EditApartamentById($ID_Apartament, $titol, $postal, $descripcion, $metros, $habitaciones, $TBaja, $TALT, $cancelacion);

    $response->redirect("location: index.php?r=gestioapartament");

    return $response;
}
?>
