<?php
// Este controlador sirve para ver la pagina de reserva.php
function ctrlReservesGestorDefault($request,  $response,$container){    

    $logged = $request->get("SESSION","logged");
    
    $response->set("logged",$logged);
    

    $userModel = $container->users();

    $userdata = $userModel->getAll($_SESSION["user"]["ID_Usuari"]);  

    $userID = $userdata["ID_Usuari"];


    $apartamentModel = $container->apartaments();
    
    $reservasGestor = $apartamentModel->getReservasGestor($userID);


     foreach ($reservasGestor as $apartamento) : ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src=" <?= $apartamento["img_url"] ?> " class="card-img-top" alt="Imagen del apartamento">
                <div class="card-body">
                    <h5 class="card-title"><?= $apartamento["Titol"]; ?></h5>
                    <p class="card-text"><?= $apartamento["Descripcio"]; ?></p>
                    <p class="card-text">Usuari arrendatari: <br> <?= $apartamento["Nom"] . ' ' . $apartamento["Cognoms"]; ?></p>
                    <p class="card-text">Telèfon : <br> <?= $apartamento["Telefon"]; ?></p>
                    <p class="card-text">E-mail : <br> <?= $apartamento["Email"]; ?></p>
                    <p class="card-text">Estat actual de la reserva : <br> <?= $apartamento["EstatReserva"]; ?></p>
                    <p class="card-text">Preu : <br> <?= $apartamento["preu"]; ?></p>
                    <p class="card-text">Dates: <br> Inici <?= $apartamento["DataInici"] . ' Final ' . $apartamento["DataFinal"]; ?></p>
                </div>
                <div class="card-footer justify-content-between">
                <?php     
                if ($apartamento["EstatReserva"] == "NO CONFIRMAT") { ?>
                        <form action="index.php" method="post">
                            <input type="hidden" name="r" value="confirmReservation">
                            <input type="hidden" name="ID_Reserva" value="<?= $apartamento["id_reserva"]; ?>">
                            <button class="btn btn-success text-start" type="submit">Confirmar reserva</button>
                        </form>
                        <form action="index.php" method="post">
                            <input type="hidden" name="r" value="cancelReservation">
                            <input type="hidden" name="ID_Reserva" value="<?= $apartamento["id_reserva"]; ?>">
                            <button class="btn btn-danger text-end" type="submit">Cancelar reserva</button>
                        </form>
                    <?php
                    } else { ?>
                        <div class="">
                            <p>Tot en ordre!</p>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    <?php endforeach;
} ?>