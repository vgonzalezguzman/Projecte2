<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/gestioapartament.css" rel="stylesheet">
    <title>Llistat de reserves</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php require "loginButton.php"; ?>
<body>
<p class="titol">Reserves als teus apartaments</p>
<div class="container">
    <div class="row">
        <?php foreach ($reservesGestor as $apartamento) : ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?php $apartamento["img_url"] ?>" class="card-img-top" alt="Imagen del apartamento">
                    <div class="card-body">
                        <h5 class="card-title"><?= $apartamento["Titol"]; ?></h5>
                        <p class="card-text"><?= $apartamento["Descripcio"]; ?></p>
                        <p class="card-text">Usuari arrendatari: <br> <?= $apartamento["Nom"] .' '. $apartamento["Cognoms"]; ?></p>
                        <p class="card-text">Telèfon : <br> <?= $apartamento["Telefon"]; ?></p>
                        <p class="card-text">E-mail : <br> <?= $apartamento["Email"]; ?></p>
                        <p class="card-text">Estat actual de la reserva : <br> <?= $apartamento["EstatReserva"]; ?></p>
                        <p class="card-text">Preu : <br> <?= $apartamento["preu"]; ?></p>
                        <p class="card-text">Dates: <br> Inici <?= $apartamento["DataInici"] .' Final '. $apartamento["DataFinal"]; ?></p>
                    </div>
                    <div class="card-footer justify-content-between">
                        <?php if($apartamento["EstatReserva"] == "NO CONFIRMAT") { ?>
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
                        <?php } else { ?>
                            <div class="">
                                <p>Tot en ordre!</p>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

</body>
</html>
