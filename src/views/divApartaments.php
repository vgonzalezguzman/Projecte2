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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#reservaModal">Reservar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $id++;
    }
    ?>
</div>
<?php
}
?> 
