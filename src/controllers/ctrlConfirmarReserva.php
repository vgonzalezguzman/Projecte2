<?php
// Este controlador transforma los datos del formulario a variables PHP y llama a la función para editar el apartamento.

function ctrlConfirmarReserva($request, $response, $container) {


    $logged = $request->get("SESSION","logged");

    $response->set("logged",$logged);
 
    $ID_Reserva = $request->get(INPUT_POST,"ID_Reserva");
    $apartamentModel = $container->apartaments();

    // Llama a la función para editar el apartamento con los datos del formulario
    $apartamentModel->confirmReservation($ID_Reserva);

    $response->redirect("location: index.php?r=gestioReserves");

    return $response;
}
?>