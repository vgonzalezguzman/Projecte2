<?php if ($apartaments == NULL) {    
?>   
<?php require "nothingFound.php"; ?>    
<?php
}
else { ?>
<div id="mostraCases" class="ms-0 d-flex align-items-center row row-cols-xl-3 row-cols-1 row-cols-md-2 flex-lg-row justify-content-center col-12">
    <?php
    $id = 0;
    foreach ($apartaments as $value) {
        $urlsArray = explode(', ',  $value['Img_Apartament']);
        $carouselType = 0;
        echo '<div class=" d-flex mt-5 flex-column col  rounded-4 p-0 align-items-center justify-content-center" >';
        echo '<div class="card  ms-0  col-11 min-height-400" >';
        echo    '<div id="pis'.$id.'_small" class="portadaCasa col-12 carousel slide">';
        echo        '<div class="carousel-inner rounded-4">';
                    foreach ($urlsArray as $url) {
                        if ($carouselType == 0) {
                            echo 
                            '<div class="carousel-item active">
                            <img src="<?php echo $url; ?>" class="d-block w-100" alt="...">
                            </div>';

                        } else {
                            echo
                            '<div class="carousel-item">
                            <img src="<?php echo $url; ?>" class="d-block w-100" alt="...">
                            </div>';

                        }
                    }
        echo        '</div>';
        echo        '<button class="carousel-control-prev" type="button" data-bs-target="#pis'.$id.'_small" data-bs-slide="prev">';
        echo            '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
        echo            '<span class="visually-hidden">Previous</span>';
        echo        '</button>';
        echo        '<button class="carousel-control-next" type="button" data-bs-target="#pis'.$id.'_small" data-bs-slide="next">';
        echo            '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
        echo            '<span class="visually-hidden">Next</span>';
        echo        '</button>';
        echo    '</div>';
        echo    '<div class="card-body"  data-bs-toggle="modal" data-bs-target="#modalPis'.$id.'" >';
        echo        '<div class="d-flex row p-3">';
        echo            '<p id="title" class="col-12"> '.$value['Titol'].'</p>';  
        echo            '<p id="localitzacio" class="col-12"> '.$value['Adr_Postal'].' </p>';
        echo            '<p id="superficie" class="col-6"> '.$value['Metres_Cuadrats'].' m2 </p>';
        echo            '<p id="Ocupants" class="col-6"> '.$value['N_Habitacions'].' Habitacions </p>';
        echo            '<p id="preu" class="col-12"> '.$value['Preu_TBaixa'].'€ nit </p>';  
        echo        '</div>';
        echo    '</div>';

        echo'</div>';

        echo '
        <div class="modal fade" id="modalPis'.$id.'" tabindex="-1" role="dialog" aria-labelledby="modalPis'.$id.'Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable custom-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPis'.$id.'Label">Apa1</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border: none; background-color: transparent;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body">
                    <div id="pis'.$id.'" class="portadaCasa col-12 carousel slide">
                        <div class="carousel-inner rounded-4">';
                            $carouselType = 0;
                            foreach ($urlsArray as $url) {
                                if ($carouselType == 0) {
                                    echo 
                                    '<div class="carousel-item active">
                                       <img src="<?php echo $url; ?>" class="d-block w-100" alt="...">
                                    </div>';
        
                                } else {
                                    echo
                                    '<div class="carousel-item">
                                       <img src="<?php echo $url; ?>" class="d-block w-100" alt="...">
                                    </div>';
        
                                }
                            }
                        echo '</div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#pis'.$id.'" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#pis'.$id.'" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="d-flex row p-3">
                            <p id="localitzacio" class="col-12">
                                '.$value['Titol'].'
                            </p>
                            <p id="superficie" class="col-6">
                                '.$value['Metres_Cuadrats'].' m2
                            </p>
                            <p id="Ocupants" class="col-6">
                                '.$value['N_Habitacions'].' Habitacions
                            </p>
                            <p id="preu" class="col-12">
                                '.$value['Preu_TBaixa'].'€ nit
                            </p>  
                        </div>
                        <p>Qué ofereix aquest espai?</p>
                        <div class="container">
                            <div class="services-container">
                                <div class="service-item">Aire Acondicionado</div>
                                <div class="service-item">Terraza</div>
                                <div class="service-item">Piscina</div>
                                <div class="service-item">Cocina</div>
                                <div class="service-item">Calefacción</div>
                                <div class="service-item">Wifi</div>
                                <div class="service-item">TV</div>
                                <div class="service-item">Lavadora</div>
                                <div class="service-item">Plancha</div>
                                <div class="service-item">Secador de pelo</div>
                                <div class="service-item">Champú</div>
                                <div class="service-item">Aparcamiento</div>
                            </div>
                        </div>
        
                        <div class="calendar">
                            <label for="start">Desde:</label>
                            <input type="date" id="start">
                        </div>
                        <div class="calendar">
                            <label for="end">Hasta:</label>
                            <input type="date" id="end">
                        </div>
        
                        <button class="fechas">Buscar</button>
        
                        <label for="guests">Número de personas:</label>
                        <input type="number" id="guests" name="guests" min="1" max="6" placeholder="Número de personas">
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <div data-tooltip="Preu:123€" class="button">
                        <div class="button-wrapper">
                            <div class="text">Reservar</div>
                                <span class="icon">
                                <a href="index.php?r=reserva" >
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                                    </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>';
                
        echo'</div>';
        $id++;

    }
    
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
                <div class="modal-dialog modal-dialog-scrollable custom-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalPis<?php $id ?>Label"><?php echo $value['Titol']; ?></h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border: none; background-color: transparent;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="pis<?php $id ?>" class="portadaCasa col-12 carousel slide">
                                <div class="carousel-inner rounded-4">
                                    <?php
                                    $carouselType = 0;
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
                                    }
                                    ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#pis<?php $id ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#pis<?php $id ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex row p-3">
                                    <p id="localitzacio" class="col-12">
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
                                <p>Qué ofereix aquest espai?</p>
                                <div class="container">
                                    <div class="services-container">
                                        <div class="service-item">Aire Acondicionado</div>
                                        <div class="service-item">Terraza</div>
                                        <div class="service-item">Piscina</div>
                                        <div class="service-item">Cocina</div>
                                        <div class="service-item">Calefacción</div>
                                        <div class="service-item">Wifi</div>
                                        <div class="service-item">TV</div>
                                        <div class="service-item">Lavadora</div>
                                        <div class="service-item">Plancha</div>
                                        <div class="service-item">Secador de pelo</div>
                                        <div class="service-item">Champú</div>
                                        <div class="service-item">Aparcamiento</div>
                                    </div>
                                </div>

                                <?php
                                if ($tipo == "") {
                                ?>
                                    <div class="calendar">
                                        <label for="start">Desde:</label>
                                        <input type="date" id="start">
                                    </div>
                                    <div class="calendar">
                                        <label for="end">Hasta:</label>
                                        <input type="date" id="end">
                                    </div>

                                    <button class="fechas">Buscar</button>

                                    <label for="guests">Número de personas:</label>
                                    <input type="number" id="guests" name="guests" min="1" max="6" placeholder="Número de personas">
                                <?php
                                } elseif ($tipo == "viewUsuari") {
                                ?>
                                    <div class="d-flex row p-3">
                                        <p id="data-inici" class="col-6">Entrada</br><?php echo $value["DataInici"]; ?></p>
                                        <p id="data-final" class="col-6">Sortida</br><?php echo $value["DataFinal"]; ?></p>
                                        <p id="e-reserva" class="col-12">Estat de la reserva</br><?php echo $value["EstatReserva"]; ?></p>
                                        <p id="t-cancelacio" class="col-12">Periòde de cancelaciò amb devolució</br><?php echo $value["TempsCancelacio"]; ?> dies</p>
                                        <p id="preu-Final" class="col-12">Preu</br><?php echo $value["preu"]; ?> €</p>
                                    </div>

                                <?php } ?>

                            </div>
                        </div>

                        <?php if ($tipo == "") { ?>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <div data-tooltip="Preu:123€" class="button">
                                    <div class="button-wrapper">
                                        <div class="text">Reservar</div>
                                        <span class="icon">
                                            <a href="index.php?r=reserva">
                                                <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } elseif ($tipo == "viewUsuari") {
                            "";
                        } ?>


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

?> 