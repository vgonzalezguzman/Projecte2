<?php
function ctrlDoReserva($request, $response, $container) {

    $ID_Usuari = $_SESSION["user"]["ID_Usuari"];
    $ID_Apartament = $request->get(INPUT_POST, "ID_Apartament");
    $num_personas = $request->get(INPUT_POST, "num_personas");
    $temps_cancelacio = $request->get(INPUT_POST, "cancelacion"); // Corregir aquí
    $data_inici = $request->get(INPUT_POST, "check_in");
    $data_final = $request->get(INPUT_POST, "check_out");
    $preu = $request->get(INPUT_POST, "precio_total");


    $fecha_inici = DateTime::createFromFormat('d/m/Y', $data_inici);
    $fecha_final = DateTime::createFromFormat('d/m/Y', $data_final);

    $data_inici = $fecha_inici->format('Y-m-d');
    $data_final = $fecha_final->format('Y-m-d');

    $reservaModel = $container->reservas();
    $reservaModel->addReservas($data_inici, $data_final, $preu, $temps_cancelacio, $ID_Usuari, $ID_Apartament);

    $logged = $request->get("SESSION","logged");
    $response->set("logged", $logged);
    $response->redirect("location: index.php?r=");
    return $response;
}
?>