<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register</title>

    <style>
        .custom-form {
            background-color: #f5f5f5;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .custom-btn {
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
        }

        .custom-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="index.php" method="post" class="custom-form">
                    <input type="hidden" name="r" value="doaddapartament">

                    <div class="mb-3">
                        <label for="name" class="form-label">Titulo</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>

                    <div class="mb-3">
                        <label for="lastname" class="form-label">Codigo Postal</label>
                        <input type="int" name="postal" class="form-control" id="postal">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" id="descripcion">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Metros cuadrados</label>
                        <input type="text" name="metros" class="form-control" id="metros">
                    </div>

                    <div class="mb-3">
                        <label for="cardnumber" class="form-label">Número de Habitaciones</label>
                        <input type="number" name="habitaciones" class="form-control" id="habitaciones">
                    </div>

                    <div class="mb-3">
                        <label for="pass" class="form-label">Precio de temporada baja</label>
                        <input type="int" name="TBaja" class="form-control" id="TBaja">
                    </div>

                    <div class="mb-3">
                        <label for="pass" class="form-label">Precio de temporada Alta</label>
                        <input type="int" name="TALT" class="form-control" id="TALT">
                    </div>

                    <div class="mb-3">
                        <label for="pass" class="form-label">Dias de Cancelacion</label>
                        <input type="int" name="cancelacion" class="form-control" id="cancelacion">
                    </div>  

                    <button type="submit" class="btn btn-primary custom-btn">Continuar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
