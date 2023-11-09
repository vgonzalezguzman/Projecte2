<?php
// Este controlador sirve para ver la pagina de reserva.php
function ctrlReservesGestorPis($request, $response, $container)
{
    $logged = $request->get("SESSION", "logged");

    $response->set("logged", $logged);

    $userModel = $container->users();

    $userdata = $userModel->getAll($_SESSION["user"]["ID_Usuari"]);

    $userID = $userdata["ID_Usuari"];

    $piso = $_GET['piso'];

    $arrendatari = $_GET['arrendatari'];

    
    $apartamentModel = $container->apartaments();

    $piso = isset($_GET['piso']) ? $_GET['piso'] : null;
    $arrendatari = isset($_GET['arrendatari']) ? $_GET['arrendatari'] : null;

    $reservasGestor = null;

    if ($arrendatari !== null && $piso !== null) {
        $reservasGestor = $apartamentModel->getReservaGestorIDArrendatari($userID, $piso, $arrendatari);
    } elseif ($arrendatari !== null && $piso == null) {
        $reservasGestor = $apartamentModel->getReservaGestorNomesArrendatari($userID, $arrendatari);
    } elseif ($arrendatari == null && $piso !== null) {
        $reservasGestor = $apartamentModel->getReservasGestorIDApartament($userID, $piso);
    } elseif ($arrendatari == null && $piso == null) {
        $reservasGestor = $apartamentModel->getReservasGestor($userID);
    }

$dadesPisos = $reservasGestor;
$response->setJSON();
$response->set('dadesPisos', $dadesPisos);
return $response;
}
?>
