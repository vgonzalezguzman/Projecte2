<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../css/apartament.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Editar Apartamento</title>
</head>
<?php require "loginButton.php"; ?>    
<body>
    <div class="container mt-5">
        <h1>Edita el teu apartament</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="index.php" method="post" class="row g-3" enctype="multipart/form-data">
                    <input type="hidden" name="r" value="doeditapartament">
                    <input type="hidden" name="ID_Apartament" value="<?= $apartament["ID_Apartament"]; ?>">
                    <div class="col-md-6">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" name="title" class="form-control" value="<?= $apartament["Titol"]; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="postal" class="form-label">Codigo Postal</label>
                        <input type="text" name="postal" class="form-control" value="<?= $apartament["Adr_Postal"]; ?>">
                    </div>
                    <div class="col-12">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" name="descripcion" class="form-control" value="<?= $apartament["Descripcio"]; ?>">
                    </div>
                    <div class="col-12">
                        <label for="images" class="form-label">Imágenes del Apartamento</label>
                        <input class="form-control" type="file" name="images[]" multiple>
                        <small class="form-text text-muted">Arrastra y suelta las imágenes aquí o haz clic para seleccionarlas.</small>
                    </div>
                    <div class="col-md-6">
                        <label for="metros" class="form-label">Metros cuadrados</label>
                        <input type="text" name="metros" class="form-control" value="<?= $apartament["Metres_Cuadrats"]; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for ="habitaciones" class="form-label">Número de Habitaciones</label>
                        <input type="number" name="habitaciones" class="form-control" value="<?= $apartament["N_Habitacions"]; ?>">
                    </div>
                    <div class="col-12">
                        <label for="TBaja" class="form-label">Precio de temporada baja</label>
                        <input type="text" name="TBaja" class="form-control" value="<?= $apartament["Preu_TBaixa"]; ?>">
                    </div>
                    <div class="col-12">
                        <label for="TALT" class="form-label">Precio de temporada Alta</label>
                        <input type="text" name="TALT" class="form-control" value="<?= $apartament["Preu_TAlt"]; ?>">
                    </div>
                    <div class="col-12">
                        <label for="cancelacion" class="form-label">Días de Cancelación</label>
                        <input type="text" name="cancelacion" class="form-control" value="<?= $apartament["Dies_Cancelacio"]; ?>">
                    </div>
                    <div class="col-12">
                        <label for="servicios" class="form-label">Servicios</label>
                        <?php
                        foreach ($serv as $service) {
                            echo '<div class="form-check form-check-inline col-md-3 flex-wrap align-items-center" >';
                            echo '<input class="form-check-input" type="checkbox"  name="servicesSelected[]" id="servicesSelected' . $service["ID_Servei"] . '" value="servicesSelected' . $service["ID_Servei"] . '">';
                            echo '<label class="form-check-label" for="servicesSelected' . $service["ID_Servei"] . '">';
                            echo $service["Nom_Servei"];
                            echo '</label>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary custom-btn">Continuar</button>
                    <a href="index.php?r=gestioapartament" class="btn btn-primary custom-btn">Cancelar</a>
                </form>

               
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>
