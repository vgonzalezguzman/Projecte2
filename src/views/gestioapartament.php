<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/gestioapartament.css" rel="stylesheet">
    <title>Listado de Apartamentos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Tus Apartamentos</h1>
<div class="container">
    <div class="apartamentos">
        <?php foreach ($apartaments as $apartamento) : ?>
            <div class="apartamento">
                <div class="img">
                    <img src="../../images/casa1.jpg" alt="">
                </div>
                <div class="info">
                    <p class="titulo"><?= $apartamento["Titol"]; ?></p>
                    <p class="descripcio"><?= $apartamento["Descripcio"]; ?></p>
                    <p class="precioALT"><?= $apartamento["Preu_TAlt"]; ?>€</p>
                    <p class="precioBAIX"><?= $apartamento["Preu_TBaixa"]; ?>€</p>
                </div>

                <div class="botones">
                    <form action="index.php" method="post">
                        <input type="hidden" name="r" value="editapartament">
                        <input type="hidden" name="ID_Apartament" value="<?= $apartamento["ID_Apartament"]; ?>">
                        <button class="editar" type="submit">Editar</button>
                    </form>
                    
                    <form action="index.php" method="post">
                        <input type="hidden" name="r" value="dodeleteapartament">
                        <input type="hidden" name="ID_Apartament" value="<?= $apartamento["ID_Apartament"]; ?>">
                        <button class="editar" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
                <a href="index.php?r=">
                    <button class="custom-btn" type="submit">Cancelar</button>
                </a>
    </div>
</div>
</body>
</html>
