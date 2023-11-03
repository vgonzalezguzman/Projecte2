<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../css/apartament.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Afegir Apartament</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="index.php" method="post" class="row g-3">
                <input type="hidden" name="r" value="doaddapartament">

                    <div class="col-md-6">
                        <label for="title" class="form-label">Titulo</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="postal" class="form-label">Codigo Postal</label>
                        <input type="text" name="postal" class="form-control" id="postal">
                    </div>
                    <div class="col-12">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" id="descripcion">
                    </div>
                    <div class="col-12">
                        <label for="imagenes" class="form-label">Imágenes del Apartamento</label>
                        <input class="form-control" type="file" name="imagenes" multiple>
                        <small class="form-text text-muted">Arrastra y suelta las imágenes aquí o haz clic para seleccionarlas.</small>
                    </div>

                    <div class="col-md-6">
                        <label for="metros" class="form-label">Metros cuadrados</label>
                        <input type="text" name="metros" class="form-control" id="metros">
                    </div>
                    <div class="col-md-6">
                        <label for="habitaciones" class="form-label">Número de Habitaciones</label>
                        <input type="number" name="habitaciones" class="form-control" id="habitaciones">
                    </div>
                    <div class="col-12">
                        <label for="TBaja" class="form-label">Precio de temporada baja</label>
                        <input type="text" name="TBaja" class="form-control" id="TBaja">
                    </div>
                    <div class="col-12">
                        <label for="TALT" class="form-label">Precio de temporada Alta</label>
                        <input type="text" name="TALT" class="form-control" id="TALT">
                    </div>
                    <div class="col-12">
                        <label for="cancelacion" class="form-label">Dias de Cancelacion</label>
                        <input type="text" name="cancelacion" class="form-control" id="cancelacion">
                    </div>

                    <button type="submit" class="btn btn-primary custom-btn">Continuar</button>

                </form>
                    <a href="index.php?r=">
                        <button class="custom-btn" type="submit">Cancelar</button>
                    </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
