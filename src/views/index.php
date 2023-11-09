<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../css/web.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="../../js/app.js" defer></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <title>Document</title>

    
</head>

<body>
    <div class="logo">
        <img src="../../images/logo2.jpg" alt="logo">
    </div>


    <?php require "loginButton.php"; ?>


    <div class="d-flex d-none d-sm-flex justify-content-center">
        <div id="carouselMostrari" class="col-8 carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                foreach ($imageRandom as $index => $url) {
                    $activeClass = $index === 0 ? 'active' : ''; // Añade la clase 'active' al primer elemento
                    echo '<div class="carousel-item ' . $activeClass . '">
                        <img src="' . $url['URL'] . '" class="d-block w-100" alt="...">
                      </div>';
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMostrari" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselMostrari" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

    <div class="container-fluid p5 text-center d-flex justify-content-center">
        <div class="">
            <form class="form">
                <button>
                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <input class="input" placeholder="Search" required="" type="text">
                <button class="reset" type="reset">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </form>

        </div>
        <div class="btn-group">
            <button type="button" id="dropdown_menu" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="container_menu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <div class="dropdown-menu">
                <h5>Buscar destinos</h5>
                <div class="calendar">
                    <label for="start">Desde:</label>
                    <input type="date" id="start">
                </div>
                <div class="calendar">
                    <label for="end">Hasta:</label>
                    <input type="date" id="end">
                </div>
                <label for="guests">Número de personas:</label>
                <input type="number" id="guests" name="guests" min="1" max="6" placeholder="Número de personas">
                <label for="guests">Número de habitaciones:</label>
                <input type="number" id="guests" name="guests" min="1" max="6" placeholder="Número de personas">


            </div>
        </div>
    </div>

    <?php require "divApartaments.php"; ?>
    </div>
    <div class="d-flex mt-5 flex-column col rounded-4 p-0 align-items-center justify-content-center">
        <div class="card ms-0 col-11 min-height-400">
            <div id="myMap" class="map" data-lat="<?= $value['Latitud']; ?>" data-lon="<?= $value['Longitud']; ?>"></div>
        </div>
    </div>

    <script>
        // Configuración del mapa para este apartamento
        var map = L.map('myMap').setView([42.2664500, 2.9616300], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Añadir marcadores con popup
        <?php foreach ($apartaments as $value) { ?>
            var marker<?= $value['ID_Apartment']; ?> = L.marker([<?= $value['Latitud']; ?>, <?= $value['Longitud']; ?>]).addTo(map);
        <?php } ?>

        // Adjust map view to fit all markers
        var group = new L.featureGroup([
            <?php foreach ($apartaments as $value) { ?>
                marker<?= $value['ID_Apartment']; ?>,
            <?php } ?>
        ]);

        map.fitBounds(group.getBounds());

        // Invalidate size to fix map display issue
        setTimeout(function() {
            map.invalidateSize();
        }, 300);
    </script>




    </script>

    <script src="../../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>