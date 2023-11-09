<?php
if ($apartaments == NULL) {    
    require "nothingFound.php";
} else {
?>
<div id="mostraCases" class="ms-0 d-flex align-items-center row row-cols-xl-3 row-cols-1 row-cols-md-2 flex-lg-row justify-content-center col-12">
    <?php
    $id = 0;
    foreach ($apartaments as $value) {
        $urlsArray = explode(', ',  $value['Img_Apartament']);
        $carouselType = 0;
    ?>
<<<<<<< HEAD

        <div class=" d-flex mt-5 flex-column col  rounded-4 p-0 align-items-center justify-content-center">
            <div class="card  ms-0  col-11 min-height-400">
                <div id="pis<?php $id ?>_small" class="portadaCasa col-12 carousel slide">
                    <div class="carousel-inner rounded-4">
                        <?php
                        foreach ($urlsArray as $url) {
                            if ($carouselType == 0) {
                        ?>

                                <div class="carousel-item active">
                                    <img src="<?php echo $url ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php
                            } else {
                            ?>

                                <div class="carousel-item">
                                    <img src="<?php echo $url ?>" class="d-block w-100" alt="...">
                                </div>
                        <?php
                            }
                        } ?>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#pis<?php $id ?>_small" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#pis<?php $id ?>_small" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#modalPis<?php $id ?>">
=======
        <div class="d-flex mt-5 flex-column col rounded-4 p-0 align-items-center justify-content-center">
            <div class="card ms-0 col-11 min-height-400">
                <!-- Muestra la primera imagen del apartamento en la tarjeta -->
                <img src="<?= reset($urlsArray) ?>" class="card-img-top" alt="Imagen del apartamento">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#modalPis<?= $id ?>">
>>>>>>> de703a02dd94e22913189113e27372cfdef390ed
                    <div class="d-flex row p-3">
                        <p id="title" class="col-12">
                            <?php echo $value['Titol']; ?>
                        </p>
                        <p id="localitzacio" class="col-12">
                            <?php echo $value['Adr_Postal']; ?>
                        </p>
                        <p id="superficie" class="col-6">
                            <?php echo $value['Metres_Cuadrats']; ?> m2
                        </p>
                        <p id="Ocupants" class="col-6">
                            <?php echo $value['N_Habitacions']; ?> Habitacions
                        </p>
                        <p id="preu" class="col-12">
                            <?php echo $value['Preu_TBaixa']; ?>€ nit
                        </p>
                    </div>
                </div>

            </div>


            <div class="modal fade" id="modalPis<?php $id ?>" tabindex="-1" role="dialog" aria-labelledby="modalPis<?php $id ?>Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable custom-dialog  ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalPis<?php $id ?>Label"><?php echo $value['Titol']; ?></h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border: none; background-color: transparent;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <h5 class="mt-4">Información del Apartamento:</h5>
                        <p>Nombre: <?= $value['Titol']; ?></p>
                        <p>Dirección: <?= $value['Carrer']; ?></p>
                        <p>Superficie: <?= $value['Metres_Cuadrats']; ?> m2</p>
                        <p>Habitaciones: <?= $value['N_Habitacions']; ?></p>
                        <h5 class="mt-4">Servicios:</h5>
                        <p><?php echo $value['Servicios']; ?></p>
                        <div class="d-flex mt-5 flex-column col rounded-4 p-0 align-items-center justify-content-center">
        <div class="card ms-0 col-11 min-height-400">
            <div id="map<?= $id ?>" class="map" data-lat="<?= $value['Latitud']; ?>" data-lon="<?= $value['Longitud']; ?>"></div>
            <script>
                // Configuración del mapa para este apartamento
                var map<?= $id ?> = L.map('map<?= $id ?>').setView([42.2664500, 2.9616300], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map<?= $id ?>);

                // Añadir marcador con popup
                L.marker([<?= $value['Latitud']; ?>, <?= $value['Longitud']; ?>])
                    .addTo(map<?= $id ?>)
                    .bindPopup('<?= $value['Titol']; ?>')
                    .openPopup();
            </script>

        </div>
    </div>
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#reservaModal">Continuar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $id++;
    }
    ?>
</div>
<<<<<<< HEAD
=======

<div class="modal fade" id="reservaModal" tabindex="-1" role="dialog" aria-labelledby="reservaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable custom-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reservaModalLabel">Realizar Reserva</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border: none; background-color: transparent;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Elige tus fechas de reserva:</p>
                <form action="index.php" method="post">
                    <input type="hidden" name="r" value="reserva">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="from">Desde</label>
                                <input type="text" class="form-control" id="from" name="check_in" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="to">Hasta</label>
                                <input type="text" class="form-control" id="to" name="check_out" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="personas">Número de personas:</label>
                                <input type="number" class="form-control" id="personas" name="num_personas">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Reservar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
>>>>>>> de703a02dd94e22913189113e27372cfdef390ed
<?php
}
?> 
