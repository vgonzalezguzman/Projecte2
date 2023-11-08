<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="../../js/app.js" defer > </script>
    <script>
      
    </script>
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
<?php require "loginButton.php"; ?>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="index.php" method="post" class="custom-form" enctype="multipart/form-data">
                    <input type="hidden" name="r" value="doaddapartament">

                    <div class="mb-3">
                        <label class="form-label">Titulo</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Direccion</label>
                        <input type="text" name="Carrer" class="form-control" id="direccion">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" id="descripcion">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Número de Habitaciones</label>
                        <input type="number" name="habitaciones" class="form-control" id="habitaciones">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Codigo Postal</label>
                        <input type="int" name="postal" class="form-control" id="postal">
                    </div>

                    

                    <div class="mb-3">
                        <label  class="form-label">Metros cuadrados</label>
                        <input type="text" name="metros" class="form-control" id="metros">
                    </div>

                    

                    <div class="mb-3">
                        <label class="form-label">Precio de temporada baja</label>
                        <input type="int" name="TBaja" class="form-control" id="TBaja">
                    </div>
                    <div class="mb-3">
                        <label for="from">From</label>
                        <input type="text" id="from" name="iniciTB">
                        <label for="to">to</label>
                        <input type="text" id="to" name="finalTB">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Precio de temporada Alta</label>
                        <input type="int" name="TALT" class="form-control" id="TALT">
                    </div>
                    <div class="mb-3">
                        <label for="from">From</label>
                        <input type="text" id="from2" name="iniciTA">
                        <label for="to">to</label>
                        <input type="text" id="to2" name="finalTA">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Dias de Cancelacion</label>
                        <input type="int" name="cancelacion" class="form-control" id="cancelacion">
                    </div>  
                    <div class="mb-3">
                            <label for="formFile" class="form-label">Añadir imagenes</label>
                            <input  class="form-control" type="file" name="images[]" multiple>
                        </div>

                        <div class="mb-3">
                            <label for="pass" class="form-label">Servicios</label>
                            <div class="">
                        <?php
                        // Supongamos que $serv es el array multidimensional con los servicios
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
                  </div>
                       
                        <button type="submit" class="btn btn-primary custom-btn">Continuar</button>
                    
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>

</html>
