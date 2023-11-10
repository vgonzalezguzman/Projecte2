<?php
// Este controlador sirve para ver la pagina de reserva.php

function ctrlReservaView($request, $response, $container)
{
    $ID_Apartament = $request->get(INPUT_POST, "ID_Apartament");
    $Titulo = $request->get(INPUT_POST, "Titol");
    $Descripcion = $request->get(INPUT_POST, "Descripcio");
    $numP = $request->get(INPUT_POST, "num_personas");
    $inicio = $request->get(INPUT_POST, "check_in");
    $final = $request->get(INPUT_POST, "check_out");

    // Convertir fechas a formato SQL
    $inicio_sql = DateTime::createFromFormat('d/m/Y', $inicio)->format('Y-m-d');
    $final_sql = DateTime::createFromFormat('d/m/Y', $final)->format('Y-m-d');

    // Calcular duración en días
    $fecha_inicio = new DateTime($inicio_sql);
    $fecha_fin = new DateTime($final_sql);
    $duracion_dias = $fecha_inicio->diff($fecha_fin)->days;

    $temporadaModel = $container->temporada();
    $temporadas = $temporadaModel->getTemporadaByID($ID_Apartament);

    // Asumiendo que hay una única temporada para el apartamento (puedes ajustar según tus necesidades)
    $temporada = $temporadas[0];

    $apartamentModel = $container->apartaments();
    $apartamentModel = $apartamentModel->selectApartamentByID($ID_Apartament);
    $response->set("apartament", $apartamentModel);

    $response->set("inicio", $inicio);
    $response->set("final", $final);
    $response->set("numP", $numP);

    // Verificar si la fecha de inicio está dentro de la temporada
    $fechaInicio = new DateTime($inicio_sql);
    $fechaInicioTemporada = new DateTime($temporada["D_Inici"]);
    $fechaFinTemporada = new DateTime($temporada["D_Final"]);

    if ($fechaInicio >= $fechaInicioTemporada && $fechaInicio <= $fechaFinTemporada) {
        // La fecha de inicio está dentro de la temporada
        if ($temporada["Nom_Temporada"] == "Temporada Baja") {
            $price = $apartamentModel["Preu_TBaixa"] * $duracion_dias * $numP;
        } else {
            $price = $apartamentModel["Preu_TAlt"] * $duracion_dias * $numP;
        }
    } else {
        // La fecha de inicio no está en ninguna temporada, se asume temporada baja
        $price = $apartamentModel["Preu_TBaixa"] * $duracion_dias * $numP;
    }
    $precionoche = $price/$duracion_dias;
    $price = $price + 10;
    $response->set("noche", $precionoche);
    $response->set("price", $price);


    $response->setTemplate("reserva.php");

    return $response;
}
?>
