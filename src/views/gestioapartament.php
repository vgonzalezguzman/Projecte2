<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/gestioapartament.css" rel="stylesheet">
    <title>Listado de Apartamentos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php require "loginButton.php"; ?>
<body>
<p class="titol">Els teus apartaments</p>
<div class="container">
    <div class="row">
        <?php foreach ($apartaments as $apartamento) : ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../../images/casa1.jpg" class="card-img-top" alt="Imagen del apartamento">
                    <div class="card-body">
                        <h5 class="card-title"><?= $apartamento["Titol"]; ?></h5>
                        <p class="card-text"><?= $apartamento["Descripcio"]; ?></p>
                        <p class="card-text">Precio Temporada Alta: <?= $apartamento["Preu_TAlt"]; ?>€</p>
                        <p class="card-text">Precio Temporada Baja: <?= $apartamento["Preu_TBaixa"]; ?>€</p>
                    </div>
                    <div class="card-footer justify-content-between">
                        <form action="index.php" method="post">
                            <input type="hidden" name="r" value="editapartament">
                            <input type="hidden" name="ID_Apartament" value="<?= $apartamento["ID_Apartament"]; ?>">
                            <button class="btn btn-primary text-start" type="submit">Editar</button>
                        </form>
                        <form action="index.php" method="post">
                            <input type="hidden" name="r" value="dodeleteapartament">
                            <input type="hidden" name="ID_Apartament" value="<?= $apartamento["ID_Apartament"]; ?>">
                            <button class="btn btn-danger text-end" type="submit">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

</body>
</html>
